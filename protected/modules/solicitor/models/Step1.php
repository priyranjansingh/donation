<?php

class Step1 extends CFormModel {

    public $solicitor_name;

    public function rules() {
        return array(
            array('solicitor_name', 'required'),
        );
    }

    public function attributeLabels() {
        return array(
            'solicitor_name' => "Solicitor Name",
        );
    }

    public function checkVisitCode($attribute) {
        $visit = Visits::model()->find(array('condition' => 'visit_code = ' . $this->$attribute . ' '));
        if (empty($visit)) {
            $this->addError($attribute, 'Sorry, this visit code does not exist');
        }
    }

}
