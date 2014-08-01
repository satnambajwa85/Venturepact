<?php

/**
 * This is the model class for table "time_zone".
 *
 * The followings are the available columns in table 'time_zone':
 * @property integer $id
 * @property string $zone
 * @property string $zone_value
 * @property string $time_save_hours
 * @property string $add_date
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Company[] $companies
 * @property Developer[] $developers
 */
class TimeZone extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'time_zone';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('zone, zone_value, time_save_hours', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('zone', 'length', 'max'=>50),
			array('zone_value', 'length', 'max'=>100),
			array('time_save_hours', 'length', 'max'=>5),
			array('add_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, zone, zone_value, time_save_hours, add_date, status', 'safe', 'on'=>'search'),
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
			'companies' => array(self::HAS_MANY, 'Company', 'time_zone_id'),
			'developers' => array(self::HAS_MANY, 'Developer', 'time_zone_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'zone' => 'Zone',
			'zone_value' => 'Zone Value',
			'time_save_hours' => 'Time Save Hours',
			'add_date' => 'Add Date',
			'status' => 'Status',
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
		$criteria->compare('zone',$this->zone,true);
		$criteria->compare('zone_value',$this->zone_value,true);
		$criteria->compare('time_save_hours',$this->time_save_hours,true);
		$criteria->compare('add_date',$this->add_date,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TimeZone the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
