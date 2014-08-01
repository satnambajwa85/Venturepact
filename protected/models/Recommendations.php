<?php

/**
 * This is the model class for table "recommendations".
 *
 * The followings are the available columns in table 'recommendations':
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $phone_number
 * @property string $linked_in_profile
 * @property string $comments
 * @property string $technical_comments
 * @property integer $status
 * @property integer $developer_id
 *
 * The followings are the available model relations:
 * @property Developer $developer
 */
class Recommendations extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'recommendations';
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
			array('status, developer_id', 'numerical', 'integerOnly'=>true),
			array('name, email, linked_in_profile', 'length', 'max'=>45),
			array('phone_number', 'length', 'max'=>20),
			array('name, email, phone_number,comments, technical_comments', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, email, phone_number, linked_in_profile, comments, technical_comments, status, developer_id', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'email' => 'Email',
			'phone_number' => 'Phone Number',
			'linked_in_profile' => 'Linked In Profile',
			'comments' => 'Comments',
			'technical_comments' => 'Technical Comments',
			'status' => 'Status',
			'developer_id' => 'Developer',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone_number',$this->phone_number,true);
		$criteria->compare('linked_in_profile',$this->linked_in_profile,true);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('technical_comments',$this->technical_comments,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('developer_id',$this->developer_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Recommendations the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
