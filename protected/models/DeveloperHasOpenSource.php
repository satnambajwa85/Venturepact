<?php

/**
 * This is the model class for table "developer_has_open_source".
 *
 * The followings are the available columns in table 'developer_has_open_source':
 * @property integer $id
 * @property integer $developer_id
 * @property string $project_name
 * @property string $details
 * @property string $link
 * @property integer $status
 * @property string $opensource
 *
 * The followings are the available model relations:
 * @property Developer $developer
 */
class DeveloperHasOpenSource extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'developer_has_open_source';
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
			array('developer_id, status', 'numerical', 'integerOnly'=>true),
			array('project_name, link', 'length', 'max'=>45),
			array('details', 'length', 'max'=>500),
			array('opensource', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, developer_id, project_name, details, link, status, opensource', 'safe', 'on'=>'search'),
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
			'project_name' => 'Project Name',
			'details' => 'Details',
			'link' => 'Link',
			'status' => 'Status',
			'opensource' => 'Opensource',
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
		$criteria->compare('project_name',$this->project_name,true);
		$criteria->compare('details',$this->details,true);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('opensource',$this->opensource,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DeveloperHasOpenSource the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
