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
            $criteria->addSearchCondition('first_name', $solicitor_name);
            $sol_list = Solicitor::model()->findAll($criteria);
            
            pre($sol_list,true);
            
            
            $this->render('step2', array('visit_model' => $visit_model, 'prev_don_model' => $prev_don_model));
        } else {
            $this->redirect(array("/user"));
        }
    }

}
