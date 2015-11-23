<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property string $id
 * @property string $username
 * @property string $password
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $country
 * @property string $zip
 * @property string $email
 * @property string $email2
 * @property string $mobile
 * @property string $phone
 * @property integer $notify_solicitor
 * @property string $credit_limits
 * @property integer $is_active
 * @property integer $is_admin
 * @property integer $mobile_verified
 * @property integer $phone_verified
 * @property integer $status
 * @property integer $deleted
 * @property string $created_by
 * @property string $modified_by
 * @property string $date_entered
 * @property string $date_modified
 */
class Users extends BaseModel
{
	public $verifyPassword;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, username, password,verifyPassword, first_name, last_name, address, city, state, country, zip, email, mobile, notify_solicitor, credit_limits, is_active, is_admin, created_by, modified_by, date_entered, date_modified', 'required'),
			array('notify_solicitor, is_active, is_admin, mobile_verified, phone_verified, status, deleted', 'numerical', 'integerOnly'=>true),
			array('id, created_by, modified_by', 'length', 'max'=>36),
			array('username, password,verifyPassword, address, city, state, country, email, email2', 'length', 'max'=>255),
			array('first_name, last_name', 'length', 'max'=>128),
			array('zip, mobile, phone, credit_limits', 'length', 'max'=>16),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, verifyPassword, first_name, last_name, address, city, state, country, zip, email, email2, mobile, phone, notify_solicitor, credit_limits, is_active, is_admin, mobile_verified, phone_verified, status, deleted, created_by, modified_by, date_entered, date_modified', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'verifyPassword' => 'Re-Password',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'address' => 'Address',
			'city' => 'City',
			'state' => 'State',
			'country' => 'Country',
			'zip' => 'Zip',
			'email' => 'Email',
			'email2' => 'Email2',
			'mobile' => 'Mobile',
			'phone' => 'Phone',
			'notify_solicitor' => 'Notify Solicitor',
			'credit_limits' => 'Credit Limits',
			'is_active' => 'Is Active',
			'is_admin' => 'Is Admin',
			'mobile_verified' => 'Mobile Verified',
			'phone_verified' => 'Phone Verified',
			'status' => 'Status',
			'deleted' => 'Deleted',
			'created_by' => 'Created By',
			'modified_by' => 'Modified By',
			'date_entered' => 'Date Entered',
			'date_modified' => 'Date Modified',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('email2',$this->email2,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('notify_solicitor',$this->notify_solicitor);
		$criteria->compare('credit_limits',$this->credit_limits,true);
		$criteria->compare('is_active',$this->is_active);
		$criteria->compare('is_admin',$this->is_admin);
		$criteria->compare('mobile_verified',$this->mobile_verified);
		$criteria->compare('phone_verified',$this->phone_verified);
		$criteria->compare('status',$this->status);
		$criteria->compare('deleted',$this->deleted);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('modified_by',$this->modified_by,true);
		$criteria->compare('date_entered',$this->date_entered,true);
		$criteria->compare('date_modified',$this->date_modified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
                'defaultOrder'=>'date_entered DESC',
            ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
