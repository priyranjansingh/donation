<?php

class Step1 extends CFormModel {

    public $visit_code;

    public function rules() {
        return array(
            array('visit_code', 'required'),
            array('visit_code', 'checkVisitCode'),
        );
    }

    public function attributeLabels() {
        return array(
            'visit_code' => "Visit Code",
        );
    }

    public function checkVisitCode($attribute) {
        $visit = Visits::model()->find(array('condition' => 'visit_code = ' . $this->$attribute . ' '));
        if (empty($visit)) {
            $this->addError($attribute, 'Sorry, this visit code does not exist');
        }
    }

}
