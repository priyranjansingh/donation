<?php

class DonateController extends Controller {

    public $layout = '//layouts/main';
    public $defaultAction = "step1";

    public function actionStep1() {
        if (isFrontUserLoggedIn()) {
            $model = new Step1;
            if (isset($_POST['Step1'])) {
                $model->attributes = $_POST['Step1'];
                // validate user input and redirect to previous page if valid
                if ($model->validate()) {
                    $visit_code = $model->visit_code;
                    Yii::app()->session['visit_code'] = $visit_code;
                    $this->redirect(array("step2"));
                }
            }

            $this->render('step1', array('model' => $model));
        } else {
            $this->redirect(array("/user"));
        }
    }

    public function actionStep2() {
        if (isFrontUserLoggedIn()) {
            $visit_code = Yii::app()->session['visit_code'];
            $visit_model = Visits::model()->find(array('condition' => 'visit_code = "' . $visit_code . '" '));
            // finding out all the previous donations
            $user_id = Yii::app()->session['user_id'];
            $solicitor_id = $visit_model->solicitor->id;
            $prev_don_model = Donation::model()->findAll(array('condition' => 'user_id = "' . $user_id . '" and solicitor_id = "' . $solicitor_id . '" '));
            $this->render('step2', array('visit_model' => $visit_model, 'prev_don_model' => $prev_don_model));
        } else {
            $this->redirect(array("/user"));
        }
    }

    public function actionStep3() {
        if (isFrontUserLoggedIn()) {
            $visit_code = Yii::app()->session['visit_code'];

            $visit_model = Visits::model()->find(array('condition' => 'visit_code = "' . $visit_code . '" '));
            $step3_model = new Step3;
            if (isset($_POST['Step3'])) {
                $step3_model->attributes = $_POST['Step3'];
                if ($step3_model->validate()) {

                    $donation_model = new Donation;

                    $donation_model->user_id = Yii::app()->session['user_id'];
                    $donation_model->visit_id = $visit_model->id;
                    $donation_model->mobile = '123456789';
                    $donation_model->solicitor_id = $visit_model->solicitor->id;
                    $donation_model->amount = $step3_model->amount;
                    $donation_model->mode = 'web';
                    $donation_model->short_note = $step3_model->message;
                    $donation_model->payment_status = 'transferred';

                    $donation_model->reference_number = getToken(8);

                    $donation_model->validate();
                    $donation_model->save();

                    // calculating the debit amount to be inserted in the user_trans table
                    $user_id = Yii::app()->session['user_id'];
                    $user_balance = Users::model()->getUserBalance($user_id);
                    $user_model = Users::model()->findByPk($user_id);
                    $credit_limits = $user_model->credit_limits;
                    $actual_don_amt = $step3_model->amount;


                    if ($actual_don_amt > $user_balance) {
                        // deducting the user credit
                        if ($user_balance > 0) {
                            $from_user_credit = $actual_don_amt - $user_balance;
                        } else {
                            $from_user_credit = $actual_don_amt;
                        }
                        $final_user_credit = $credit_limits - $from_user_credit;
                        $user_model->credit_limits = $final_user_credit;
                        $user_model->validate();
                        $user_model->save();
                    }

                    // for storing in the user_trans table
                    $trans_model = new UserTrans;
                    $trans_model->user_id = $donation_model->user_id;
                    $trans_model->debit = $actual_don_amt;
                    $trans_model->donation_id = $donation_model->id;
                    $trans_model->save();

                    unset(Yii::app()->session['visit_code']);
                    $this->redirect(array("/user/default/accountSummary"));
                }
            }
            $this->render('step3', array('visit_model' => $visit_model, 'step3_model' => $step3_model));
        } else {
            $this->redirect(array("/user"));
        }
    }

}
