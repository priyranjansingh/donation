<?php

class DonateController extends Controller {

    public $layout = '//layouts/main';
    public $defaultAction = "step1";

    public function actionStep1() {
        if (isFrontUserLoggedIn()) {
            $model = new Step1;
            $this->render('step1', array('model' => $model));
        } else {
            $this->redirect(array("/user"));
        }
    }
    
    public function actionStep2()
    {
        if (isFrontUserLoggedIn()) {
            $this->render('step2');
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
