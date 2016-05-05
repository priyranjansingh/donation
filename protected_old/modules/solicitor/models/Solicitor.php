<?php

/**
 * This is the model class for table "solicitor".
 *
 * The followings are the available columns in table 'solicitor':
 * @property string $id
 * @property string $solicitor_code
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $country
 * @property integer $zip
 * @property string $married
 * @property integer $children
 * @property string $email
 * @property string $mobile
 * @property string $gender
 * @property string $date_of_estd
 * @property integer $freezed
 * @property integer $status
 * @property integer $deleted
 * @property string $created_by
 * @property string $modified_by
 * @property string $date_entered
 * @property string $date_modified
 */
class Solicitor extends FrontBaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'solicitor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, solicitor_code, first_name, last_name, address, city, state, country, zip, married, children, email, mobile, gender, date_of_estd, freezed, created_by, modified_by, date_entered, date_modified', 'required'),
			array('zip, children, freezed, status, deleted', 'numerical', 'integerOnly'=>true),
			array('id, created_by, modified_by', 'length', 'max'=>36),
			array('solicitor_code, first_name, last_name, address, city, state, country, email', 'length', 'max'=>255),
			array('married', 'length', 'max'=>8),
			array('mobile', 'length', 'max'=>16),
			array('gender', 'length', 'max'=>6),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, solicitor_code, first_name, last_name, address, city, state, country, zip, married, children, email, mobile, gender, date_of_estd, freezed, status, deleted, created_by, modified_by, date_entered, date_modified', 'safe', 'on'=>'search'),
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
			'solicitor_code' => 'Solicitor Code',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'address' => 'Address',
			'city' => 'City',
			'state' => 'State',
			'country' => 'Country',
			'zip' => 'Zip',
			'married' => 'Married',
			'children' => 'Children',
			'email' => 'Email',
			'mobile' => 'Mobile',
			'gender' => 'Gender',
			'date_of_estd' => 'Date Of Estd',
			'freezed' => 'Freezed',
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
		$criteria->compare('solicitor_code',$this->solicitor_code,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('zip',$this->zip);
		$criteria->compare('married',$this->married,true);
		$criteria->compare('children',$this->children);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('date_of_estd',$this->date_of_estd,true);
		$criteria->compare('freezed',$this->freezed);
		$criteria->compare('status',$this->status);
		$criteria->compare('deleted',$this->deleted);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('modified_by',$this->modified_by,true);
		$criteria->compare('date_entered',$this->date_entered,true);
		$criteria->compare('date_modified',$this->date_modified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Solicitor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
