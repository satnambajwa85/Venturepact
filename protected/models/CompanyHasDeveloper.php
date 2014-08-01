<?php

/**
 * This is the model class for table "company_has_developer".
 *
 * The followings are the available columns in table 'company_has_developer':
 * @property integer $id
 * @property integer $company_id
 * @property integer $developer_id
 * @property integer $timeslot_id
 * @property string $schedule_date
 * @property string $add_date
 * @property string $modification_date
 * @property integer $status_id
 *
 * The followings are the available model relations:
 * @property Company $company
 * @property Developer $developer
 * @property Timeslot $timeslot
 * @property Status $status
 */
class CompanyHasDeveloper extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'company_has_developer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('company_id, developer_id, timeslot_id, schedule_date, status_id', 'required'),
			array('company_id, developer_id, timeslot_id, status_id', 'numerical', 'integerOnly'=>true),
			array('add_date, modification_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, company_id, developer_id, timeslot_id, schedule_date, add_date, modification_date, status_id', 'safe', 'on'=>'search'),
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
			'company' => array(self::BELONGS_TO, 'Company', 'company_id'),
			'developer' => array(self::BELONGS_TO, 'Developer', 'developer_id'),
			'timeslot' => array(self::BELONGS_TO, 'Timeslot', 'timeslot_id'),
			'status' => array(self::BELONGS_TO, 'Status', 'status_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'company_id' => 'Company',
			'developer_id' => 'Developer',
			'timeslot_id' => 'Timeslot',
			'schedule_date' => 'Schedule Date',
			'add_date' => 'Add Date',
			'modification_date' => 'Modification Date',
			'status_id' => 'Status',
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
		$criteria->compare('company_id',$this->company_id);
		$criteria->compare('developer_id',$this->developer_id);
		$criteria->compare('timeslot_id',$this->timeslot_id);
		$criteria->compare('schedule_date',$this->schedule_date,true);
		$criteria->compare('add_date',$this->add_date,true);
		$criteria->compare('modification_date',$this->modification_date,true);
		$criteria->compare('status_id',$this->status_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CompanyHasDeveloper the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
