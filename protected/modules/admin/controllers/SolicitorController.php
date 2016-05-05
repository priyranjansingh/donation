<?php

class SolicitorController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
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
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','view','create','update','manage','donations','status','ProcessPending'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('manage','delete','status','ProcessPending'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{

		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Solicitor;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Solicitor']))
		{
			// pre($_POST['Solicitor'],true);
			$model->attributes=$_POST['Solicitor'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$solicitor = Solicitor::model()->findByPk($model->id);
		if(isset($_POST['Solicitor']))
		{
			$model->attributes=$_POST['Solicitor'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
			'solicitor'=>$solicitor
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('manage'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new Solicitor('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Solicitor']))
			$model->attributes=$_GET['Solicitor'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionManage()
	{
		$model=new Solicitor('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Solicitor']))
			$model->attributes=$_GET['Solicitor'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionDonations($id){
		$visit_sql = "SELECT d.user_id,d.visit_id,s.first_name,s.last_name,v.visit_code, CASE WHEN v.status = 1 THEN 'Yes' ELSE 'No' END AS visit_active, v.start_date,v.end_date, SUM( d.amount ) AS amount FROM `user_donation` d LEFT JOIN visits v ON d.visit_id = v.id LEFT JOIN solicitor s ON d.solicitor_id = s.id WHERE s.id = '$id' GROUP BY d.visit_id ORDER BY d.date_entered DESC";
        $visits = BaseModel::executeSimpleQuery($visit_sql);
        
        $c_sql = "SELECT SUM(amount) AS amount FROM solicitor_credit WHERE solicitor_id = '$id'";
        $c_result = BaseModel::executeSimpleQueryFirstRow($c_sql);
        if($c_result === null){
            $amount = 0;
        } else {
            $amount = $c_result['amount'];
        }
        $d_sql = "SELECT SUM(amount) AS amount FROM user_donation WHERE solicitor_id = '$id'";
        $d_result = BaseModel::executeSimpleQueryFirstRow($d_sql);
        if($d_result === null){
            $damount = 0;
        } else {
            $damount = $d_result['amount'];
        }
        $solicitor = Solicitor::model()->findByPk($id);
        $donation = new Donation('users'); 
        $donation->unsetAttributes();
        
        $payments = new SolicitorCredit('solicitor');
        $payments->unsetAttributes();

        $this->render('donations', array(
            'visits' => $visits,
            'donation' => $donation,
            'solicitor' => $solicitor,
            'amount' => $amount,
            'damount' => $damount,
            'payments' => $payments
        ));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Solicitor the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Solicitor::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Solicitor $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='solicitor-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function gridVisit($data, $row) {
        $visit = $data->visit_id;
        $code = Visits::model()->findByPk($visit)->visit_code;
        return $code;
    }

    public function gridUser($data, $row) {
        $code = Users::model()->findByPk($data->user_id);
        return $code->first_name.' '.$code->last_name.'('.$code->username.')';
    }
    
    public function actionStatus($id) {
        $model = Donation::model()->findByPk($id);
        $model->payment_status = "transferred";
        $model->save();
        $this->redirect(array('donations','id'=> $model->solicitor_id));
    }
    
    
    
    public function gridPaymentStatus($data, $row) {
        $status = $data->payment_status;
        if ($status == "pending") {
            return CHtml::link('Pending', base_url() . '/admin/solicitor/status?id=' . $data->id);
        } else {
            return "Processed";
        }
    }
    
     public function actionProcessPending($id) {
        $visit_model = Visits::model()->findByPk($id);
        $attributes = array('payment_status' => 'transferred');
        //Donation::model()->updateAll($attributes, 'payment_status=:payment_status', array(':payment_status' => 'pending'));
        Donation::model()->updateAll($attributes, array('condition'=> "payment_status = 'pending' AND visit_id = '$id' "));
        $this->redirect(array('donations','id'=> $visit_model->solicitor_id));
    }
    
    
}
