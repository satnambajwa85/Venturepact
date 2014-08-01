<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $display_name
 * @property string $username
 * @property string $password
 * @property integer $status
 * @property string $role
 *
 * The followings are the available model relations:
 * @property Company[] $companies
 * @property Developer[] $developers
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public $ConfirmPassword;
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username', 'email'),
			array('username', 'unique'),
			array('display_name,username, password, ConfirmPassword', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('password', 'length', 'min'=>6),
            array('display_name, role', 'length', 'max'=>45),
			array('username, password', 'length', 'max'=>100),
			array('ConfirmPassword', 'compare', 'compareAttribute'=>'password'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, display_name, username, password, status, role,linkedin_id', 'safe', 'on'=>'search'),
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
			'companies' => array(self::HAS_MANY, 'Company', 'users_id'),
			'developers' => array(self::HAS_MANY, 'Developer', 'users_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'display_name' => 'Full Name',
			'username' => 'Email',
			'password' => 'Password',
			'status' => 'Status',
			'role' => 'Role',
			'linkedin_id'=>'Linkedin Profile Id',
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
		$criteria->compare('display_name',$this->display_name,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('linkedin_id',$this->linkedin_id,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
