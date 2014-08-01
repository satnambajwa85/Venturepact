<?php

/**
 * This is the model class for table "references".
 *
 * The followings are the available columns in table 'references':
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $linkedIn_profile_url
 * @property string $comments
 * @property integer $status
 * @property integer $developer_id
 *
 * The followings are the available model relations:
 * @property Developer $developer
 */
class References extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'references';
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
			array('name, email', 'length', 'max'=>45),
			array('linkedIn_profile_url', 'length', 'max'=>100),
			array('comments', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, email, linkedIn_profile_url, comments, status, developer_id', 'safe', 'on'=>'search'),
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
			'linkedIn_profile_url' => 'Linked In Profile Url',
			'comments' => 'Comments',
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
		$criteria->compare('linkedIn_profile_url',$this->linkedIn_profile_url,true);
		$criteria->compare('comments',$this->comments,true);
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
	 * @return References the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
