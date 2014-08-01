<?php

/**
 * This is the model class for table "developer".
 *
 * The followings are the available columns in table 'developer':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $skype_name
 * @property string $alternative_email
 * @property string $phone
 * @property string $dob
 * @property string $address1
 * @property string $address2
 * @property string $pincode
 * @property string $add_date
 * @property integer $status
 * @property integer $users_id
 * @property integer $state_id
 * @property integer $time_zone_id
 *
 * The followings are the available model relations:
 * @property Accounts[] $accounts
 * @property CompanyHasDeveloper[] $companyHasDevelopers
 * @property State $state
 * @property TimeZone $timeZone
 * @property Users $users
 * @property DeveloperHasCompany[] $developerHasCompanies
 * @property DeveloperHasDegree[] $developerHasDegrees
 * @property DeveloperHasEducation[] $developerHasEducations
 * @property DeveloperHasOpenSource[] $developerHasOpenSources
 * @property DeveloperHasPreviousCompany[] $developerHasPreviousCompanies
 * @property DeveloperHasProjects[] $developerHasProjects
 * @property DeveloperHasQuestions[] $developerHasQuestions
 * @property DeveloperHasSchools[] $developerHasSchools
 * @property DeveloperHasSkills[] $developerHasSkills
 * @property DeveloperHasSubject[] $developerHasSubjects
 * @property Recommendations[] $recommendations
 * @property References[] $references
 */
class Developer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */

	public $country_id;
	public function tableName()
	{
		return 'developer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('users_id, state_id, time_zone_id', 'required'),
			array('status, users_id, state_id, time_zone_id', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, alternative_email, phone', 'length', 'max'=>45),
			array('skype_name, address1, address2', 'length', 'max'=>50),
			array('pincode', 'length', 'max'=>15),
			array('dob, add_date ,skype_name', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, first_name, last_name, skype_name, alternative_email, phone, dob, address1, address2, pincode, add_date, status, users_id, state_id, time_zone_id', 'safe', 'on'=>'search'),
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
			'accounts' => array(self::HAS_MANY, 'Accounts', 'developer_id'),
			'companyHasDevelopers' => array(self::HAS_MANY, 'CompanyHasDeveloper', 'developer_id'),
			'state' => array(self::BELONGS_TO, 'State', 'state_id'),
			'timeZone' => array(self::BELONGS_TO, 'TimeZone', 'time_zone_id'),
			'users' => array(self::BELONGS_TO, 'Users', 'users_id'),
			'developerHasCompanies' => array(self::HAS_MANY, 'DeveloperHasCompany', 'developer_id'),
			'developerHasDegrees' => array(self::HAS_MANY, 'DeveloperHasDegree', 'developer_id'),
			'developerHasEducations' => array(self::HAS_MANY, 'DeveloperHasEducation', 'developer_id'),
			'developerHasOpenSources' => array(self::HAS_MANY, 'DeveloperHasOpenSource', 'developer_id'),
			'developerHasPreviousCompanies' => array(self::HAS_MANY, 'DeveloperHasPreviousCompany', 'developer_id'),
			'developerHasProjects' => array(self::HAS_MANY, 'DeveloperHasProjects', 'developer_id'),
			'developerHasQuestions' => array(self::HAS_MANY, 'DeveloperHasQuestions', 'developer_id'),
			'developerHasSchools' => array(self::HAS_MANY, 'DeveloperHasSchools', 'developer_id'),
			'developerHasSkills' => array(self::HAS_MANY, 'DeveloperHasSkills', 'developer_id'),
			'developerHasSubjects' => array(self::HAS_MANY, 'DeveloperHasSubject', 'developer_id'),
			'recommendations' => array(self::HAS_MANY, 'Recommendations', 'developer_id'),
			'references' => array(self::HAS_MANY, 'References', 'developer_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'skype_name' => 'Skype Name',
			'alternative_email' => 'Alternative Email',
			'phone' => 'Phone',
			'dob' => 'Dob',
			'address1' => 'Address1',
			'address2' => 'Address2',
			'pincode' => 'Pincode',
			'add_date' => 'Add Date',
			'status' => 'Status',
			'users_id' => 'Users',
			'state_id' => 'State',
			'country_id'=>'Country',
			'time_zone_id' => 'Time Zone',
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
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('skype_name',$this->skype_name,true);
		$criteria->compare('alternative_email',$this->alternative_email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('address1',$this->address1,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('pincode',$this->pincode,true);
		$criteria->compare('add_date',$this->add_date,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('users_id',$this->users_id);
		$criteria->compare('state_id',$this->state_id);
		$criteria->compare('time_zone_id',$this->time_zone_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Developer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
