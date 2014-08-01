<?php

/**
 * This is the model class for table "developer_has_questions".
 *
 * The followings are the available columns in table 'developer_has_questions':
 * @property integer $developer_id
 * @property integer $questions_id
 * @property string $url
 * @property integer $id
 *
 * The followings are the available model relations:
 * @property Developer $developer
 * @property Questions $questions
 */
class DeveloperHasQuestions extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'developer_has_questions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('developer_id, questions_id, url', 'required'),
			array('developer_id, questions_id', 'numerical', 'integerOnly'=>true),
            //array('url', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('developer_id, questions_id, url, id', 'safe', 'on'=>'search'),
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
			'questions' => array(self::BELONGS_TO, 'Questions', 'questions_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'developer_id' => 'Developer',
			'questions_id' => 'Questions',
			'url' => 'Url',
			'id' => 'ID',
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

		$criteria->compare('developer_id',$this->developer_id);
		$criteria->compare('questions_id',$this->questions_id);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('id',$this->id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DeveloperHasQuestions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
