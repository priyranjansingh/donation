<?php

class DonationController extends Controller {

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
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('index', 'view', 'create', 'update', 'manage', 'loadvisits', 'status', 'ProcessPending'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('manage', 'delete', 'ProcessPending'),
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
        $solicitor = Solicitor::model()->findByPk($model->solicitor_id);
        $this->render('view', array(
            'model' => $model,
            'solicitor' => $solicitor
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Donation;
        if (isset($_GET['user'])) {
            $model->user_id = $_GET['user'];
        }

        if (isset($_GET['visit'])) {
            $model->visit_id = $_GET['visit'];
            $model->solicitor_id = Visits::model()->findByPk($model->visit_id)->solicitor_id;
        }
        $users_lists = BaseModel::getAll('Users');
        $users = array();
        foreach ($users_lists as $user) {
            $users[$user->id] = $user->first_name . ' ' . $user->last_name . '(' . $user->username . ')';
        }
        // $users = CHtml::listData(BaseModel::getAll('Users'),'id','username');
        $lists = BaseModel::getAll('Solicitor');
        $solicitors = array();
        foreach ($lists as $list) {
            $solicitors[$list->id] = $list->first_name . ' ' . $list->last_name . '(' . $list->solicitor_code . ')';
        }
        $visits = CHtml::listData(BaseModel::getAll('Visits'), 'id', 'visit_code');
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Donation'])) {
            $model->attributes = $_POST['Donation'];
            $model->reference_number = getToken(8);
            
            $model->validate();
            if (!empty($model->user_id)) {
                $user_id = $model->user_id;
                $user_balance = Users::model()->getUserBalance($user_id);
                $user_model = Users::model()->findByPk($user_id);
                $credit_limits = $user_model->credit_limits;
                $donation_amt = $model->amount;

                if ($user_balance >= 0) {
                    if ($user_balance < $donation_amt) {
                        $user_allowable_amount = $user_balance + $credit_limits;
                        if ($donation_amt > $user_allowable_amount) {
                            $model->addError('amount', "Sorry. The user has not the sufficient balance.");
                        }
                    }
                } else if ($user_balance < 0) {
                    $user_allowable_amount = $credit_limits - abs($user_balance);
                    if ($donation_amt > $user_allowable_amount) {
                        $model->addError('amount', "Sorry. The user has not the sufficient balance.");
                    }
                }
            }
            if (empty($model->errors)) {
                if ($model->save()) {
                    $trans = new UserTrans;
                    $trans->tran_type = 'DONATION';
                    $trans->user_id = $model->user_id;
                    $trans->debit = $model->amount;
                    $trans->donation_id = $model->id;
                    $trans->save();
                    $this->redirect(array('view', 'id' => $model->id));
                }
            }
        }

        $this->render('create', array(
            'model' => $model,
            'users' => $users,
            'solicitors' => $solicitors,
            'visits' => $visits
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $users_lists = BaseModel::getAll('Users');
        $users = array();
        foreach ($users_lists as $user) {
            $users[$user->id] = $user->first_name . ' ' . $user->last_name . '(' . $user->username . ')';
        }
        // $users = CHtml::listData(BaseModel::getAll('Users'),'id','username');
        $lists = BaseModel::getAll('Solicitor');
        $solicitors = array();
        foreach ($lists as $list) {
            $solicitors[$list->id] = $list->first_name . ' ' . $list->last_name . '(' . $list->solicitor_code . ')';
        }
        $visits = CHtml::listData(Visits::model()->findAll(), 'id', 'visit_code');
        $trans = UserTrans::model()->find(array("condition" => "donation_id = '" . $id . "'"));
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Donation'])) {
            $model->attributes = $_POST['Donation'];
            if ($trans->debit != $model->amount) {
                $user_balance = Users::model()->getUserBalance($model->user_id);
                $user_model = Users::model()->findByPk($model->user_id);
                $user_model->verifyPassword = $user_model->password;
                $credit_limits = $user_model->credit_limits;

                $donation_amount = $model->amount;
                $current_amount = $trans->debit;
                if ($donation_amount > $current_amount) {
                    $credit_limits = $user_model->credit_limits;
                    $donation_amt = $donation_amount - $current_amount;
                    if ($user_balance >= 0) {
                        $total_user_limit = $user_balance + $credit_limits;
                    } else {
                        $total_user_limit = $credit_limits;
                    }

                    if ($total_user_limit < $donation_amt) {
                        $model->addError('amount', 'Sorry. The user has not the sufficient balance.');
                    } else {
                        $change_amt = $donation_amount - $current_amount;
                        if ($user_balance >= $change_amt) {
                            $model->save();
                            $trans->debit = $donation_amount;
                            $trans->save();
                        } else if ($user_balance < $change_amt) {
                            if ($user_balance > 0) {
                                $amt_from_credit = $change_amt - $user_balance;
                                $credit_new = $credit_limits - $amt_from_credit;
                            } else if ($user_balance <= 0) {
                                $amt_from_credit = $change_amt;
                                $credit_new = $credit_limits - $amt_from_credit;
                            }

                            $model->save();
                            $trans->debit = $donation_amount;
                            $trans->save();
                            $user_model->credit_limits = $credit_new;
                            $user_model->save();
                        }
                        $this->redirect(array('view', 'id' => $model->id));
                    }
                } else if ($donation_amount < $current_amount) {
                    $change_amt = $current_amount - $donation_amount;
                    if ($user_balance >= 0) {
                        $trans->debit = $donation_amount;
                        $model->save();
                        $trans->save();
                    } else if ($user_balance < 0) {
                        $credit_new = $credit_limits + $change_amt;
                        $user_model->credit_limits = $credit_new;
                        $user_model->save();
                        $trans->debit = $donation_amount;
                        $model->save();
                        $trans->save();
                    }
                    $this->redirect(array('view', 'id' => $model->id));
                }
            }
        }

        $this->render('create', array(
            'model' => $model,
            'users' => $users,
            'solicitors' => $solicitors,
            'visits' => $visits
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
        $model = new Donation('search');
        $users = CHtml::listData(BaseModel::getAll('Users'), 'id', 'username');
        $solicitors = CHtml::listData(BaseModel::getAll('Solicitor'), 'id', 'solicitor_code');
        ;
        $visits = CHtml::listData(BaseModel::getAll('Visits'), 'id', 'visit_code');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Donation']))
            $model->attributes = $_GET['Donation'];

        $this->render('index', array(
            'model' => $model,
            'users' => $users,
            'solicitors' => $solicitors,
            'visits' => $visits
        ));
    }

    /**
     * Manages all models.
     */
    public function actionManage() {
        $model = new Donation('search');

        $users_lists = BaseModel::getAll('Users');
        $users = array();
        foreach ($users_lists as $user) {
            $users[$user->id] = $user->first_name . ' ' . $user->last_name . '(' . $user->username . ')';
        }
        // $users = CHtml::listData(BaseModel::getAll('Users'),'id','username');
        $lists = BaseModel::getAll('Solicitor');
        $solicitors = array();
        foreach ($lists as $list) {
            $solicitors[$list->id] = $list->first_name . ' ' . $list->last_name . '(' . $list->solicitor_code . ')';
        }
        $visits = CHtml::listData(BaseModel::getAll('Visits'), 'id', 'visit_code');

        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Donation']))
            $model->attributes = $_GET['Donation'];

        $this->render('admin', array(
            'model' => $model,
            'users' => $users,
            'solicitors' => $solicitors,
            'visits' => $visits
        ));
    }

    public function actionProcessPending() {
        $attributes = array('payment_status' => 'transferred');
        Donation::model()->updateAll($attributes, 'payment_status=:payment_status', array(':payment_status' => 'pending'));
        $this->redirect(array('manage'));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Donation the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Donation::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Donation $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'user-donation-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionStatus($id) {
        $model = $this->loadModel($id);
        $model->payment_status = "transferred";
        $model->save();
        $this->redirect(array('manage'));
    }

    public function actionLoadvisits() {
        $solicitor = $_POST['solicitor'];
        $visits = BaseModel::getAll("Visits", array("condition" => "solicitor_id = '$solicitor'"));
        // pre($visits,true);
        echo "<option value=''>Select Visit</option>";
        foreach ($visits as $visit)
            echo CHtml::tag('option', array('value' => $visit->id), CHtml::encode($visit->visit_code), true);
    }

    public function gridVisit($data, $row) {
        $visit = $data->visit_id;
        $code = Visits::model()->findByPk($visit)->visit_code;
        return $code;
    }

    public function gridSolicitor($data, $row) {
        $solicitor = $data->solicitor_id;
        $code = Solicitor::model()->findByPk($solicitor);
        return $code->first_name . ' ' . $code->last_name . '(' . $code->solicitor_code . ')';
    }

    public function gridUser($data, $row) {
        $solicitor = $data->user_id;
        $code = Users::model()->findByPk($solicitor);
        return $code->first_name . ' ' . $code->last_name . '(' . $code->username . ')';
    }

    public function gridPaymentStatus($data, $row) {
        $status = $data->payment_status;
        if ($status == "pending") {
            return CHtml::link('Pending', base_url() . '/admin/donation/status?id=' . $data->id);
        } else {
            return "Processed";
        }
    }

}
