<?php

/**
 * This is the model class for table "user_trans".
 *
 * The followings are the available columns in table 'user_trans':
 * @property integer $id
 * @property integer $user_id
 * @property double $debit
 * @property double $credit
 * @property integer $credit_id
 * @property integer $donation_id
 * @property integer $status
 * @property integer $deleted
 * @property string $created_by
 * @property string $modified_by
 * @property string $date_entered
 * @property string $date_modified
 */
class UserTrans extends BaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_trans';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, donation_id, created_by, date_entered', 'required'),
			array('user_id, credit_id, donation_id, status, deleted', 'numerical', 'integerOnly'=>true),
			array('debit, credit', 'numerical'),
			array('created_by, modified_by', 'length', 'max'=>36),
			array('date_modified', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, debit, credit, credit_id, donation_id, status, deleted, created_by, modified_by, date_entered, date_modified', 'safe', 'on'=>'search'),
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
                    'Donation'=>array(self::BELONGS_TO, 'Donation', 'donation_id'),
                    'Usercredit'=>array(self::BELONGS_TO, 'UserCredit', 'credit_id'),
                    
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
			'debit' => 'Debit',
			'credit' => 'Credit',
			'credit_id' => 'Credit',
			'donation_id' => 'Donation',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('debit',$this->debit);
		$criteria->compare('credit',$this->credit);
		$criteria->compare('credit_id',$this->credit_id);
		$criteria->compare('donation_id',$this->donation_id);
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
	 * @return UserTrans the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
