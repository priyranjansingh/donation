<?php
class DonateController extends Controller {

    public $layout = '//layouts/main';
    public $defaultAction = "step1";

    public function actionStep1() {
        if (isFrontUserLoggedIn()) {
            $model = new Step1;
             if (isset($_POST['Step1'])) {
                $model->attributes = $_POST['Step1'];
                // validate user input and redirect to previous page if valid
                if ($model->validate()) {
                    $visit_code = $model->visit_code;
                     Yii::app()->session['visit_code'] = $visit_code;
                    $this->redirect(array("step2"));
                }
            }
            
            $this->render('step1', array('model' => $model));
        } else {
            $this->redirect(array("/user"));
        }
    }
    
    public function actionStep2()
    {
        if (isFrontUserLoggedIn()) {
            $visit_code = Yii::app()->session['visit_code'];
            $visit_model = Visits::model()->find(array('condition' => 'visit_code = "' . $visit_code . '" '));
            // finding out all the previous donations
            $user_id = Yii::app()->session['user_id'];
            $solicitor_id = $visit_model->solicitor->id;
            $prev_don_model = Donation::model()->findAll(array('condition' => 'user_id = "'.$user_id.'" and solicitor_id = "'.$solicitor_id.'" '));
            $this->render('step2',array('visit_model' => $visit_model,'prev_don_model'=> $prev_don_model));
        } else {
            $this->redirect(array("/user"));
        }
    } 
    
    public function actionStep3()
    {
        if (isFrontUserLoggedIn()) {
            $visit_code = Yii::app()->session['visit_code'];
           
            $visit_model = Visits::model()->find(array('condition' => 'visit_code = "' . $visit_code . '" '));
             
             if($_POST)
             {
                 
                 $donation_model = new Donation; 
                
                 $donation_model->user_id =  Yii::app()->session['user_id'];
                 $donation_model->visit_id =  $visit_model->id;
                 $donation_model->mobile = '123456789';
                 $donation_model->solicitor_id = $visit_model->solicitor->id;
                 $donation_model->amount = $_POST['amount'];
                 $donation_model->mode = 'web';
                 $donation_model->short_note = $_POST['message'];
                 $donation_model->payment_status = 'pending';
                
                 $donation_model->reference_number =  getToken(8);
                
                 $donation_model->validate();
                 $donation_model->save();
                 
                 // for storing in the user_trans table
                 $user_trans = new UserTrans;
                 $user_trans->user_id = $donation_model->user_id;
                 $user_trans->debit = $donation_model->user_id;
                 
                 
                 
                 
                 
                 
                 unset(Yii::app()->session['visit_code']);
                 $this->redirect(array("/user/default/accountSummary"));
                 
             }    
            $this->render('step3',array('visit_model' => $visit_model));
        } else {
            $this->redirect(array("/user"));
        }
    }        
    
    
    

}
