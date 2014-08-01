<?php

/**
 * This is the model class for table "developer_has_degree".
 *
 * The followings are the available columns in table 'developer_has_degree':
 * @property integer $id
 * @property integer $developer_id
 * @property integer $degree_id
 *
 * The followings are the available model relations:
 * @property Developer $developer
 * @property Degree $degree
 */
class DeveloperHasDegree extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'developer_has_degree';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('developer_id, degree_id', 'required'),
			array('developer_id, degree_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, developer_id, degree_id', 'safe', 'on'=>'search'),
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
			'degree' => array(self::BELONGS_TO, 'Degree', 'degree_id'),
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
			'degree_id' => 'Degree',
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
		$criteria->compare('degree_id',$this->degree_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DeveloperHasDegree the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
