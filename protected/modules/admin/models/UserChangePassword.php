<?php

class UserChangePassword extends CFormModel
{
	public $password;
	public $repassword;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('password,repassword', 'required'),
			array('password', 'length', 'min' => 6, 'max'=>20, 'message'=>Yii::t("translation", "{attribute} is too short.")),
			array('repassword', 'compare', 'compareAttribute'=>'password', 'message'=>Yii::t("translation", "Password and Verify password do not match.")),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'password'=>"New Password",
			'repassword'=>'Verify Password'
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
}

?>