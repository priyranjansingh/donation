<?php
Yii::import("application.modules.admin.models.*", true);
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
                    $this->redirect(array("step2",'visit_code'=> $visit_code));
                }
            }
            
            $this->render('step1', array('model' => $model));
        } else {
            $this->redirect(array("/user"));
        }
    }
    
    public function actionStep2($visit_code)
    {
        if (isFrontUserLoggedIn()) {
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
            $this->render('step3');
        } else {
            $this->redirect(array("/user"));
        }
    }        
    
    
    

}
