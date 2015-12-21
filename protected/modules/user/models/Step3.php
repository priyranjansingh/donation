<?php

class Step3 extends CFormModel {

    public $amount;
    public $message;

    public function rules() {
        return array(
            array('amount', 'required'),
            array('amount', 'checkBalance'),
        );
    }

    public function attributeLabels() {
        return array(
            'amount' => "Donation Amount",
            'message' => "Write a note (Optional)",
        );
    }

    public function checkBalance($attribute) {
        $user_id = Yii::app()->session['user_id'];
        $user_balance = Users::model()->getUserBalance($user_id);
        $user_model = Users::model()->findByPk($user_id);
        $credit_limits = $user_model->credit_limits;
        $donation_amt = $this->amount;
        if ($user_balance >= 0) {
            $total_user_limit = $user_balance + $credit_limits;
        } else {
            $total_user_limit = $credit_limits;
        }

        if ($total_user_limit < $donation_amt) {
            $this->addError($attribute, "Sorry. You do not have sufficient balance.");
        }
    }

}
