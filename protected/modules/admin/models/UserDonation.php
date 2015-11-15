<?php

/**
 * This is the model class for table "user_donation".
 *
 * The followings are the available columns in table 'user_donation':
 * @property string $id
 * @property string $user_id
 * @property string $visit_id
 * @property string $mobile
 * @property string $solicitor_id
 * @property string $amount
 * @property string $mode
 * @property string $payment_status
 * @property string $reference_number
 * @property integer $status
 * @property integer $deleted
 * @property string $created_by
 * @property string $modified_by
 * @property string $date_entered
 * @property string $date_modified
 */
class UserDonation extends BaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_donation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, user_id, visit_id, mobile, solicitor_id, amount, mode, payment_status, reference_number, created_by, modified_by, date_entered, date_modified', 'required'),
			array('status, deleted', 'numerical', 'integerOnly'=>true),
			array('id, user_id, visit_id, solicitor_id, reference_number, created_by, modified_by', 'length', 'max'=>36),
			array('mobile, amount', 'length', 'max'=>16),
			array('mode', 'length', 'max'=>6),
			array('payment_status', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, visit_id, mobile, solicitor_id, amount, mode, payment_status, reference_number, status, deleted, created_by, modified_by, date_entered, date_modified', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'visit_id' => 'Visit',
			'mobile' => 'Mobile',
			'solicitor_id' => 'Solicitor',
			'amount' => 'Amount',
			'mode' => 'Mode',
			'payment_status' => 'Payment Status',
			'reference_number' => 'Reference Number',
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
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('visit_id',$this->visit_id,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('solicitor_id',$this->solicitor_id,true);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('mode',$this->mode,true);
		$criteria->compare('payment_status',$this->payment_status,true);
		$criteria->compare('reference_number',$this->reference_number,true);
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
	 * @return UserDonation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
