<?php

class DefaultController extends Controller {

    public $layout = '//layouts/main';
    public $defaultAction = "login";

    public function actionIndex() {
        //$this->render('index');
    }

    public function actionLogin() {
        $this->layout = '//layouts/login_main';
        if (!isFrontUserLoggedIn()) {
            $model = new FrontUserLogin;
            $mail_sent_message = '';
            // collect user input data
            if (isset($_POST['FrontUserLogin'])) {
                $model->attributes = $_POST['FrontUserLogin'];
                // validate user input and redirect to previous page if valid
                if ($model->validate()) {

                    $user_id = $_SESSION['user_id'];
                    $this->redirect(array("accountsummary"));
                }
            }
            // display the login form
            $this->render('login', array('model' => $model, 'mail_sent_message' => $mail_sent_message));
        } else {
            $user_id = Yii::app()->session['user_id'];
            if ($user_id != '') {
                $this->redirect(array("accountsummary"));
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
        $this->layout = '//layouts/login_main';
        if (!isFrontUserLoggedIn()) {
            $model = new Registration;

            if (isset($_POST['Registration'])) {
                $model->attributes = $_POST['Registration'];
                $model->country = "USA";
                if ($model->validate()) {
                    $model->password = md5($model->password);
                    $model->confirm_password = $model->password;
                    $model->save();
                    $this->redirect(base_url() . '/user/default/login');
                }
            }
            $this->render('register', array('model' => $model));
        } else {
            $this->redirect(array("myaccount"));
        }
    }

    public function actionAccountSummary() {
        $user_id = Yii::app()->session['user_id'];
        $user_balance = Users::model()->getUserBalance($user_id);
        $user_model = Users::model()->findByPk($user_id);
        $criteria = new CDbCriteria;
        $criteria->condition = 'user_id=:user_id';
        $criteria->order = 'date_entered DESC';
        $criteria->params = array(':user_id' => $user_id);
        $user_trans = UserTrans::model()->findAll($criteria);
        $this->render('account_summary', array('user_trans' => $user_trans, 'user_model' => $user_model, 'user_balance' => $user_balance));
    }

}
