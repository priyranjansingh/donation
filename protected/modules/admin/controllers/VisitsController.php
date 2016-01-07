<?php

class VisitsController extends Controller
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','manage','close','details','search'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('manage','delete'),
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
		$model=new Visits;
		$lists = BaseModel::getAll('Solicitor');
		$solicitors = array();
		foreach($lists as $list){
			$solicitors[$list->id] = $list->first_name.' '.$list->last_name.'('.$list->solicitor_code.')';
		}
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Visits']))
		{
			$model->attributes=$_POST['Visits'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
			'solicitors' => $solicitors
		));
	}

	public function actionSearch()
	{
		$model = new VisitSearch;
		if (isset($_POST['VisitSearch'])) {
            $model->attributes = $_POST['VisitSearch'];
            if ($model->validate()) {
                $visit = Visits::model()->find(array("condition" => "visit_code = '".$model->visit_code."'"));
                $this->redirect(array("details",'id'=>$visit->id));
            }
        }
		$this->render('search', array('model' => $model));
	}

	public function actionDetails($id)
	{
		$visit = Visits::model()->findByPk($id);
		$visit_sql = "SELECT d.user_id,d.visit_id,s.first_name,s.last_name,v.visit_code, CASE WHEN v.status = 1 THEN 'Yes' ELSE 'No' END AS visit_active, v.start_date,v.end_date,d.amount FROM `user_donation` d LEFT JOIN visits v ON d.visit_id = v.id LEFT JOIN solicitor s ON d.solicitor_id = s.id WHERE d.visit_id = '$id' AND d.solicitor_id = '$visit->solicitor_id'";
        $visits = BaseModel::executeSimpleQuery($visit_sql);
        
        $donation = new Donation('users'); 
        $donation->unsetAttributes();
        
        $this->render('donations', array(
        	'visit' => $visit->visit_code,
            'visits' => $visits,
            'donation' => $donation
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
		$solicitors = CHtml::listData(BaseModel::getAll('Solicitor'), 'id', 'solicitor_code');
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Visits']))
		{
			$model->attributes=$_POST['Visits'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
			'solicitors' => $solicitors
		));
	}

	public function actionClose($id)
	{
		$model=$this->loadModel($id);
		$model->status = 0;
		$model->save();
		$this->render('close',array('visit'=>$model->visit_code));
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
		$this->redirect(array('manage'));
	}

	/**
	 * Manages all models.
	 */
	public function actionManage()
	{
		$model=new Visits('search');
		$solicitors = CHtml::listData(BaseModel::getAll('Solicitor'), 'id', 'solicitor_code');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Visits']))
			$model->attributes=$_GET['Visits'];

		$this->render('admin',array(
			'model'=>$model,
			'solicitors' => $solicitors
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Visits the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Visits::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Visits $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='visits-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function gridSolicitor($data, $row) {
        $solicitor = $data->solicitor_id;
        $code = Solicitor::model()->findByPk($solicitor);
        return $code->first_name.' '.$code->last_name.'('.$code->solicitor_code.')';
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

}
