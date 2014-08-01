<?php

/**
 * This is the model class for table "developer_has_previous_company".
 *
 * The followings are the available columns in table 'developer_has_previous_company':
 * @property integer $id
 * @property integer $developer_id
 * @property integer $previous_company_id
 * @property string $role
 * @property string $start_time
 * @property string $end_time
 * @property string $link
 * @property string $description
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Developer $developer
 * @property PreviousCompany $previousCompany
 */
class DeveloperHasPreviousCompany extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'developer_has_previous_company';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('developer_id', 'required'),
			array('developer_id, previous_company_id, status', 'numerical', 'integerOnly'=>true),
			array('role, link', 'length', 'max'=>45),
			array('start_time, end_time, description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, developer_id, previous_company_id, role, start_time, end_time, link, description, status', 'safe', 'on'=>'search'),
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
			'developer' => array(self::BELONGS_TO, 'Developer', 'developer_id'),
			'previousCompany' => array(self::BELONGS_TO, 'PreviousCompany', 'previous_company_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'developer_id' => 'Developer',
			'previous_company_id' => 'Previous Company',
			'role' => 'Role',
			'start_time' => 'Start Time',
			'end_time' => 'End Time',
			'link' => 'Link',
			'description' => 'Description',
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
		$criteria->compare('developer_id',$this->developer_id);
		$criteria->compare('previous_company_id',$this->previous_company_id);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('start_time',$this->start_time,true);
		$criteria->compare('end_time',$this->end_time,true);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DeveloperHasPreviousCompany the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
