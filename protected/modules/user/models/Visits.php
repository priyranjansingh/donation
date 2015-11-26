<?php

/**
 * This is the model class for table "visits".
 *
 * The followings are the available columns in table 'visits':
 * @property string $id
 * @property string $visit_code
 * @property string $reason
 * @property string $description
 * @property string $solicitor_id
 * @property string $start_date
 * @property string $end_date
 * @property integer $status
 * @property integer $deleted
 * @property string $created_by
 * @property string $modified_by
 * @property string $date_entered
 * @property string $date_modified
 */
class Visits extends BaseModel {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'visits';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id, visit_code, reason, description, solicitor_id, start_date, created_by, modified_by, date_entered, date_modified', 'required'),
            array('status, deleted', 'numerical', 'integerOnly' => true),
            array('id, solicitor_id, created_by, modified_by', 'length', 'max' => 36),
            array('visit_code', 'length', 'max' => 255),
            array('reason', 'length', 'max' => 512),
            array('end_date', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, visit_code, reason, description, solicitor_id, start_date, end_date, status, deleted, created_by, modified_by, date_entered, date_modified', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'solicitor'=>array(self::BELONGS_TO, 'Solicitor', 'solicitor_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'visit_code' => 'Visit Code',
            'reason' => 'Reason',
            'description' => 'Description',
            'solicitor_id' => 'Solicitor',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
        $criteria->compare('visit_code', $this->visit_code, true);
        $criteria->compare('reason', $this->reason, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('solicitor_id', $this->solicitor_id, true);
        $criteria->compare('start_date', $this->start_date, true);
        $criteria->compare('end_date', $this->end_date, true);
        $criteria->compare('status', $this->status);
        $criteria->compare('deleted', $this->deleted);
        $criteria->compare('created_by', $this->created_by, true);
        $criteria->compare('modified_by', $this->modified_by, true);
        $criteria->compare('date_entered', $this->date_entered, true);
        $criteria->compare('date_modified', $this->date_modified, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function solicitors($id) {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('visit_code', $this->visit_code, true);
        $criteria->compare('reason', $this->reason, true);
        $criteria->compare('solicitor_id', $this->solicitor_id, $id);
        $criteria->compare('start_date', $this->start_date, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Visits the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function solicitorName($id) {
        $model = Solicitor::model()->findByPk($id);
        return $model->first_name . ' ' . $model->last_name . '(' . $model->solicitor_code . ')';
    }

}
