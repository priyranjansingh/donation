<?php

ob_start();

class Step1 extends CFormModel {

    public $visit_code;

    public function rules() {
        return array(
            array('visit_code', 'required'),
        );
    }

    public function attributeLabels() {
        return array(
            'visit_code' => "Visit Code",
        );
    }

}
