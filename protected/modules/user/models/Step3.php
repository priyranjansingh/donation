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
//        $visit = Visits::model()->find(array('condition' => 'visit_code = ' . $this->$attribute . ' '));
//        if (empty($visit)) {
//            $this->addError($attribute, 'Sorry, this visit code does not exist');
//        }
    }

}
