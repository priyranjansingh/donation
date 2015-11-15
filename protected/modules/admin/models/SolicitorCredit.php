<?php

/**
 * This is the model class for table "solicitor_credit".
 *
 * The followings are the available columns in table 'solicitor_credit':
 * @property string $id
 * @property string $solicitor_id
 * @property string $visit_id
 * @property string $amount
 * @property string $mode
 * @property integer $status
 * @property integer $deleted
 * @property string $created_by
 * @property string $modified_by
 * @property string $date_entered
 * @property string $date_modifed
 */
class SolicitorCredit extends BaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'solicitor_credit';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, solicitor_id, visit_id, amount, mode, created_by, modified_by, date_entered, date_modifed', 'required'),
			array('status, deleted', 'numerical', 'integerOnly'=>true),
			array('id, solicitor_id, visit_id, created_by, modified_by', 'length', 'max'=>36),
			array('amount', 'length', 'max'=>16),
			array('mode', 'length', 'max'=>6),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, solicitor_id, visit_id, amount, mode, status, deleted, created_by, modified_by, date_entered, date_modifed', 'safe', 'on'=>'search'),
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
			'solicitor_id' => 'Solicitor',
			'visit_id' => 'Visit',
			'amount' => 'Amount',
			'mode' => 'Mode',
			'status' => 'Status',
			'deleted' => 'Deleted',
			'created_by' => 'Created By',
			'modified_by' => 'Modified By',
			'date_entered' => 'Date Entered',
			'date_modifed' => 'Date Modifed',
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
		$criteria->compare('solicitor_id',$this->solicitor_id,true);
		$criteria->compare('visit_id',$this->visit_id,true);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('mode',$this->mode,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('deleted',$this->deleted);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('modified_by',$this->modified_by,true);
		$criteria->compare('date_entered',$this->date_entered,true);
		$criteria->compare('date_modifed',$this->date_modifed,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SolicitorCredit the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
