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
        $visit = Visits::model()->find(array('condition' => "visit_code = '".$this->$attribute."'"));
        if (empty($visit)) {
            $this->addError($attribute, 'Sorry, this visit code does not exist');
        }
        else 
        {
            $visit_end_date = $visit->end_date;
            if($visit_end_date < date("Y-m-d"))
            {
                $this->addError($attribute, 'Sorry, you can not donate now as the timeframe for this visit has passed.');
            } 
            else if($visit->status != 1 || $visit->deleted ==1)
            {
               $this->addError($attribute, 'Sorry, you can not donate now as this visit code has been closed.');    
            }    
        }    
    }

}
