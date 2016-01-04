<?php

class SearchController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

    public function actionStep1() {
        if (isFrontUserLoggedIn()) {
            $model = new Step1;
            $sol_model = new Solicitor;
            if (isset($_POST['Step1'])) {
                $model->attributes = $_POST['Step1'];
                // validate user input and redirect to previous page if valid
                if ($model->validate()) {
                    $solicitor_name = $model->solicitor_name;
                    Yii::app()->session['solicitor_name'] = $solicitor_name;
                    $this->redirect(array("step2"));
                }
            }

            $this->render('step1', array('model' => $model));
        } else {
            $this->redirect(array("/user"));
        }
    }

    public function actionStep2() {
        if (isFrontUserLoggedIn()) {

            $solicitor_name = Yii::app()->session['solicitor_name'];
            
            $criteria = new CDbCriteria();
            $criteria->addSearchCondition('first_name', $solicitor_name,true,'OR');
            $criteria->addSearchCondition('last_name', $solicitor_name,true,'OR');
            $sol_list = Solicitor::model()->findAll($criteria);
            //pre($sol_list,true);
            $this->render('step2', array('sol_list' => $sol_list));
        } else {
            $this->redirect(array("/user"));
        }
    }
    
    public function actionStep3($id) {
        if (isFrontUserLoggedIn()) {
            $visit_list = Visits::model()->findAll(array("condition"=>" solicitor_id=  '".$id."' AND end_date > '".date('Y-m-d')."' AND status = 1 "));
            $this->render('step3', array('visit_list' => $visit_list));
        } else {
            $this->redirect(array("/user"));
        }
    }
    
    public function actionDonate($id)
    {
        if (isFrontUserLoggedIn()) {
            $visit_code = $id;
            Yii::app()->session['visit_code'] = $visit_code;
            $url = base_url()."/user/donate/step2";
            $this->redirect($url);
        } else {
            $this->redirect(array("/user"));
        }
    }        
    
    
    
    

}
