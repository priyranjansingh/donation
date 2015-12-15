<?php

class UsersController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'manage','transaction'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('manage', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Users;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Users'])) {
            $model->attributes = $_POST['Users'];
            $model->password = md5($model->password);
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Users'])) {
            $model->attributes = $_POST['Users'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('manage'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $this->redirect(array('manage'));
    }

    /**
     * Manages all models.
     */
    public function actionManage() {
        $model = new Users('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Users']))
            $model->attributes = $_GET['Users'];

        $this->render('admin', array(
            'model' => $model, 
        ));
    }
    
     public function actionTransaction($id) {
        $user_id = $id;
        $user = Users::model()->findByPk($id);
        
        $sql = "SELECT id, COALESCE(SUM(credit),0) - COALESCE(SUM(debit),0) AS balance from user_trans where user_id = '" . $id . "'";
        $result = BaseModel::executeSimpleQueryFirstRow($sql);
        if(!empty($result['balance']))
        {    
            $balance = $result['balance'];
        }
        else
        {
            $balance = 0;
        }

        $c_sql = "SELECT SUM(credit) AS credited FROM user_trans WHERE credit IS NOT NULL AND user_id = '$id'";
        $c_result = BaseModel::executeSimpleQueryFirstRow($c_sql);
        if(empty($c_result['credited'])){
            $credit = 0;
        } else {
            $credit = $c_result['credited'];
        }
        $d_sql = "SELECT SUM(debit) AS debited FROM user_trans WHERE debit IS NOT NULL AND user_id = '$id'";
        $d_result = BaseModel::executeSimpleQueryFirstRow($d_sql);
        if(empty($d_result['debited'])){
            $debit = 0;
        } else {
            $debit = $d_result['debited'];
        }
        
        $donations = new Donation('users');
        $donations->unsetAttributes();

        $payments = new UserCredit('users');
        $payments->unsetAttributes();

        $logs = new Log('users');
        $logs->unsetAttributes();

        $this->render('transaction', array(
            'user' => $user,
            'balance' => $balance,
            'credit' => $credit,
            'debit' => $debit,
            'donations' => $donations,
            'payments' => $payments,
            'logs' => $logs
        ));
    }
    

    protected function gridDataColumn($data, $row) {
        $sql = "SELECT id, COALESCE(SUM(credit),0) - COALESCE(SUM(debit),0) AS balance from user_trans where user_id = '" . $data->id . "'";
        $result = BaseModel::executeSimpleQueryFirstRow($sql);
        if(!empty($result['balance']))
        {    
            return "$".$result['balance'];
        }
        else
        {
            return 0;
        }    
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Users the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Users::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Users $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'users-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function gridUser($data, $row) {
        $code = Users::model()->findByPk($data->user_id);
        return $code->first_name.' '.$code->last_name.'('.$code->username.')';
    }

}
