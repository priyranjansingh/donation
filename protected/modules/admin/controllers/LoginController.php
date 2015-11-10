<?php

class LoginController extends Controller {

    public $layout = '//layouts/login_main';
    public $defaultAction = 'login';

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $this->render('index');
    }


}
