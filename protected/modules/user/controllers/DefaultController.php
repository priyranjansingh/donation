<?php

class DefaultController extends Controller {

    public $layout = '//layouts/login_main';
    public $defaultAction = "login";

    public function actionIndex() {
        //$this->render('index');
    }

    public function actionLogin() {
        if (!isFrontUserLoggedIn()) {
            $model = new FrontUserLogin;
            $mail_sent_message = '';
            // collect user input data
            if (isset($_POST['FrontUserLogin'])) {
                $model->attributes = $_POST['FrontUserLogin'];
                // validate user input and redirect to previous page if valid
                if ($model->validate()) {

                    $user_id = $_SESSION['user_id'];
                    $this->redirect(array("myaccount"));
                }
            }
            // display the login form
            $this->render('login', array('model' => $model, 'mail_sent_message' => $mail_sent_message));
        } else {
            $user_id = Yii::app()->session['user_id'];
            if ($user_id != '') {
                $this->redirect(array("myaccount"));
            } else
                $this->redirect(Yii::app()->controller->module->returnUrl);
        }
    }
    
    public function actionLogout() {
        unset(Yii::app()->session['user_id']);
        unset(Yii::app()->session['user_name']);
        unset(Yii::app()->session['date_arr']);
        $this->redirect(array("login"));
    }

    public function actionRegister() {
        if (!isFrontUserLoggedIn()) {
            $model = new Registration;
            if (isset($_POST['Registration'])) {
                $model->attributes = $_POST['Registration'];
                if ($model->validate()) {
                    $model->password = UserModule::encrypting($model->password);
                    $model->confirm_password = $model->password;
                    $model->activation_key = create_guid();

                    $role = Roles::model()->findByAttributes(array('role' => 'property owner'));
                    $model->role_id = $role->id;
                    $model->status = 0;
                    $model->save();
                    // mail sending
                    $route = 'activate';
                    $params = array('activation_key' => $model->activation_key);
                    $url = $this->createUrl($route, $params);
                    $url = $_SERVER['SERVER_NAME'] . $url;
                    $to = $model->email;
                    $subject = 'Account Activation Link';
                    $message = ' <a href="' . $url . '">Click on the link</a>';
                    mailsend($to, "arommatech@gmail.com", $subject, $message);
                    // $this->afterRegister = true;
                    $this->redirect(base_url() . '/user/success');
                    // end of mail sending
                    //Yii::app()->session['user_id'] = $model->id;
                    //Yii::app()->session['user_name'] = $model->username;
                    //$this->redirect(array("myaccount"));
                }
            }
            $this->render('register', array('model' => $model));
        } else {
            $this->redirect(array("myaccount"));
        }
    }

}
