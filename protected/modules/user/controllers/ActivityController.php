<?php

class ActivityController extends Controller {

    public $layout = '//layouts/main';

    public function actionIndex() {
        if (!empty($_POST)) {
            $from_date = $_POST['from_date'];
            $to_date = $_POST['to_date'];
            $activity_type = $_POST['activity_type'];
            $user_id = Yii::app()->session['user_id'];
            $criteria = new CDbCriteria;
            if ($activity_type == 'ALL') {
                $criteria->condition = "user_id= '$user_id' AND DATE(date_entered) >= '$from_date' AND  DATE(date_entered)<= '$to_date' ";
            } else {
                $criteria->condition = "user_id= '$user_id' AND DATE(date_entered) >= '$from_date' AND  DATE(date_entered)<= '$to_date' AND tran_type = '$activity_type' ";
            }
            $criteria->order = 'date_entered DESC';
            //$criteria->params = array(':user_id' => $user_id);
            $user_trans = UserTrans::model()->findAll($criteria);
        } else {
            $from_date = '';
            $to_date = '';
            $activity_type = 'ALL';
            $user_id = Yii::app()->session['user_id'];
            $criteria = new CDbCriteria;
            $criteria->condition = "user_id= '$user_id' ";
            $criteria->order = 'date_entered DESC';
            $user_trans = UserTrans::model()->findAll($criteria);
        }
        Yii::app()->session['form_date'] = $from_date;
        Yii::app()->session['to_date'] = $to_date;
        Yii::app()->session['activity_type'] = $activity_type;



        $this->render('activity', array('user_trans' => $user_trans, 'from_date' => $from_date, 'to_date' => $to_date, 'activity_type' => $activity_type));
    }

    public function actionExport() {
        $from_date = Yii::app()->session['form_date'];
        $to_date = Yii::app()->session['to_date'];
        $activity_type = Yii::app()->session['activity_type'];
        $user_id = Yii::app()->session['user_id'];
        if (!empty($from_date)) {
            $criteria = new CDbCriteria;
            if ($activity_type == 'ALL') {
                $criteria->condition = "user_id= '$user_id' AND DATE(date_entered) >= '$from_date' AND  DATE(date_entered)<= '$to_date' ";
            } else {
                $criteria->condition = "user_id= '$user_id' AND DATE(date_entered) >= '$from_date' AND  DATE(date_entered)<= '$to_date' AND tran_type = '$activity_type' ";
            }
            $criteria->order = 'date_entered DESC';
            $user_trans = UserTrans::model()->findAll($criteria);
        } else {
            $user_id = Yii::app()->session['user_id'];
            $criteria = new CDbCriteria;
            $criteria->condition = "user_id= '$user_id' ";
            $criteria->order = 'date_entered DESC';
            $user_trans = UserTrans::model()->findAll($criteria);
        }
         
        $mPDF1 = Yii::app()->ePdf->mpdf();
        $mPDF1->WriteHTML($this->renderPartial('export_activity', array('user_trans' => $user_trans), true));
        $mPDF1->Output('activity.pdf', 'D');
    }

}
