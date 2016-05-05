<?php

class UsercreditController extends Controller {

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
                'actions' => array('create', 'update','admin'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
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
        $model = $this->loadModel($id);
        $user = Users::model()->findByPk($model->user_id);
        $this->render('view', array(
            'model' => $model,
            'user' => $user
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new UserCredit;
        if(isset($_GET['user'])){
            $model->user_id = $_GET['user'];
        }
        $users_lists = BaseModel::getAll('Users', array("condition" => "is_admin = 0 "));
        $users = array();
        foreach($users_lists as $user){
            $users[$user->id] = $user->first_name.' '.$user->last_name.'('.$user->username.')';
        }
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['UserCredit'])) {
            $receipt = Receipt::model()->findByPk('81dc3453-b570-11e5-9a98-3c07717072c4');
            $model->attributes = $_POST['UserCredit'];
            $model->receipt_no = $receipt->receipt;
            if ($model->save()) {
                if($model->payment_status == 'a'){
                    $trans_model = new UserTrans;
                    $trans_model->tran_type = 'PAYMENT_RECEIVED';
                    $trans_model->user_id = $model->user_id;
                    $trans_model->credit = $model->amount;
                    $trans_model->credit_id = $model->id;
                    $trans_model->save();
                }
                $receipt->receipt = ($receipt->receipt + 1);
                $receipt->save();
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('create', array(
            'model' => $model,
            'users' => $users,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $users = CHtml::listData(BaseModel::getAll('Users', array("condition" => "is_admin = 0 ")), 'id', 'username');
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['UserCredit'])) {
            $model->attributes = $_POST['UserCredit'];
            if ($model->save()){
                $trans = UserTrans::model()->find(array("condition" => "credit_id = '$model->id'"));
                if($trans === null && $model->payment_status == 'a'){
                    $trans_model = new UserTrans;
                    $trans_model->tran_type = 'PAYMENT_RECEIVED';
                    $trans_model->user_id = $model->user_id;
                    $trans_model->credit = $model->amount;
                    $trans_model->credit_id = $model->id;
                    $trans_model->save();
                } else {
                    $trans->credit = $model->amount;
                    $trans->save();
                }
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('update', array(
            'model' => $model,
            'users' => $users
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
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('UserCredit');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new UserCredit('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['UserCredit']))
            $model->attributes = $_GET['UserCredit'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return UserCredit the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = UserCredit::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param UserCredit $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'user-credit-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
