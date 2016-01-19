<?php

class SettingsController extends Controller {

    public $layout = '//layouts/main';

    public function actionIndex() {
        if (isFrontUserLoggedIn()) {
            $user_id = Yii::app()->session['user_id'];
            $email_model = Settings::model()->find(array("condition" => "id = '" . $user_id . "'"));
            $email_model->scenario = 'email_submit';
            $addr_model = Settings::model()->find(array("condition" => "id = '" . $user_id . "'"));
            $addr_model->scenario = 'addr_submit';
            $mobile_model = Settings::model()->find(array("condition" => "id = '" . $user_id . "'"));
            $mobile_model->scenario = 'mobile_submit';
            $phone_model = Settings::model()->find(array("condition" => "id = '" . $user_id . "'"));
            $phone_model->scenario = 'phone_submit';
            $name_model = Settings::model()->find(array("condition" => "id = '" . $user_id . "'"));
            $name_model->scenario = 'name_submit';
            $spouse_model = Settings::model()->find(array("condition" => "id = '" . $user_id . "'"));
            $spouse_model->scenario = 'spouse_submit';

            if (isset($_POST['scenario'])) {
                $scenario = $_POST['scenario'];
                //pre($_POST,true);
                switch ($scenario) {
                    case 'email_submit':
                        $email_model->attributes = $_POST['Settings'];
                        if ($email_model->validate()) {
                            $email_model->save();
                        }
                        break;
                    case 'addr_submit':
                        $addr_model->attributes = $_POST['Settings'];
                        if ($addr_model->validate()) {
                            $addr_model->save();
                        }
                        break;
                    case 'mobile_submit':
                        $mobile_model->attributes = $_POST['Settings'];
                        if ($mobile_model->validate()) {
                            $mobile_model->save();
                        }
                        break;
                    case 'phone_submit':
                        $phone_model->attributes = $_POST['Settings'];
                        if ($phone_model->validate()) {
                            $phone_model->save();
                        }
                        break;
                    case 'name_submit':
                        $name_model->attributes = $_POST['Settings'];
                        if ($name_model->validate()) {
                            $name_model->save();
                        }
                        break;
                    case 'spouse_submit':
                        $spouse_model->attributes = $_POST['Settings'];
                        if ($spouse_model->validate()) {
                            $spouse_model->save();
                        }
                        break;
                }
            }
            $this->render('settings', array(
                'email_model' => $email_model,
                'addr_model' => $addr_model,
                'mobile_model' => $mobile_model,
                'phone_model' => $phone_model,
                'name_model' => $name_model,
                'spouse_model' => $spouse_model
                    )
            );
        } else {
            $this->redirect(array("/user"));
        }
    }

    public function actionEmail() {
        
    }

}
