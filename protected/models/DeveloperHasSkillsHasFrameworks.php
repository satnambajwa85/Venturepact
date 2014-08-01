<?php

/**
 * This is the model class for table "developer_has_skills_has_frameworks".
 *
 * The followings are the available columns in table 'developer_has_skills_has_frameworks':
 * @property integer $id
 * @property integer $developer_has_skills_id
 * @property integer $frameworks_id
 *
 * The followings are the available model relations:
 * @property DeveloperHasSkills $developerHasSkills
 * @property Frameworks $frameworks
 */
class DeveloperHasSkillsHasFrameworks extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'developer_has_skills_has_frameworks';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('developer_has_skills_id, frameworks_id', 'required'),
			array('developer_has_skills_id, frameworks_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, developer_has_skills_id, frameworks_id', 'safe', 'on'=>'search'),
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
			'developerHasSkills' => array(self::BELONGS_TO, 'DeveloperHasSkills', 'developer_has_skills_id'),
			'frameworks' => array(self::BELONGS_TO, 'Frameworks', 'frameworks_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'developer_has_skills_id' => 'Developer Has Skills',
			'frameworks_id' => 'Frameworks',
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
		$criteria->compare('developer_has_skills_id',$this->developer_has_skills_id);
		$criteria->compare('frameworks_id',$this->frameworks_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DeveloperHasSkillsHasFrameworks the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
