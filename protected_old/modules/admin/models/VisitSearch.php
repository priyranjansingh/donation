<?php

class VisitSearch extends CFormModel
{
	public $visit_code;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('visit_code', 'required'),
			// password needs to be authenticated
			array('visit_code', 'authenticate'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'visit_code'=>"Visit Code",
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())  // we only want to authenticate when no input errors
		{
			$visits = Visits::model()->find(array("condition" => "visit_code = '".$this->visit_code."'"));
			if($visits === null) {
				$this->addError("visit_code","Visit Code is not correct.");
			} else {
				return true;
			}
		}
	}
}

?>