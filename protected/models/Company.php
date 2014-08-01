<?php

/**
 * This is the model class for table "company".
 *
 * The followings are the available columns in table 'company':
 * @property integer $id
 * @property string $name
 * @property string $logo
 * @property string $description
 * @property integer $team_size
 * @property string $add_date
 * @property integer $status
 * @property integer $users_id
 * @property string $turnover
 * @property integer $language_id
 * @property integer $state_id
 * @property integer $time_zone_id
 *
 * The followings are the available model relations:
 * @property Language $language
 * @property State $state
 * @property TimeZone $timeZone
 * @property Users $users
 * @property CompanyHasDeveloper[] $companyHasDevelopers
 * @property CompanyHasInvestor[] $companyHasInvestors
 * @property CompanyHasJobs[] $companyHasJobs
 * @property CompanyHasKeywords[] $companyHasKeywords
 * @property CompanyHasTeam[] $companyHasTeams
 * @property Dayslot[] $dayslots
 * @property DeveloperHasCompany[] $developerHasCompanies
 * @property Product[] $products
 * @property Team[] $teams
 */
class Company extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public $country_id;
	public function tableName()
	{
		return 'company';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, users_id, language_id, state_id,country_id, time_zone_id', 'required'),
			array('team_size, status, users_id, language_id, state_id, time_zone_id', 'numerical', 'integerOnly'=>true),
			array('name, logo, turnover', 'length', 'max'=>45),
			array('description, add_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, logo, description, team_size, add_date, status, users_id, turnover, language_id, state_id, time_zone_id', 'safe', 'on'=>'search'),
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
			'language' => array(self::BELONGS_TO, 'Language', 'language_id'),
			'state' => array(self::BELONGS_TO, 'State', 'state_id'),
			'timeZone' => array(self::BELONGS_TO, 'TimeZone', 'time_zone_id'),
			'users' => array(self::BELONGS_TO, 'Users', 'users_id'),
			'companyHasDevelopers' => array(self::HAS_MANY, 'CompanyHasDeveloper', 'company_id'),
			'companyHasInvestors' => array(self::HAS_MANY, 'CompanyHasInvestor', 'company_id'),
			'companyHasJobs' => array(self::HAS_MANY, 'CompanyHasJobs', 'company_id'),
			'companyHasKeywords' => array(self::HAS_MANY, 'CompanyHasKeywords', 'company_id'),
			'companyHasTeams' => array(self::HAS_MANY, 'CompanyHasTeam', 'company_id'),
			'dayslots' => array(self::HAS_MANY, 'Dayslot', 'company_id'),
			'developerHasCompanies' => array(self::HAS_MANY, 'DeveloperHasCompany', 'company_id'),
			'products' => array(self::HAS_MANY, 'Product', 'company_id'),
			'teams' => array(self::HAS_MANY, 'Team', 'company_id'),
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
			'logo' => 'Logo',
			'description' => 'Description',
			'team_size' => 'Team Size',
			'add_date' => 'Add Date',
			'status' => 'Status',
			'users_id' => 'Users',
			'turnover' => 'Site URL',
			'language_id' => 'Language',
			'state_id' => 'State',
			'time_zone_id' => 'Time Zone',
			'country_id'	=>'Country'
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
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('team_size',$this->team_size);
		$criteria->compare('add_date',$this->add_date,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('users_id',$this->users_id);
		$criteria->compare('turnover',$this->turnover,true);
		$criteria->compare('language_id',$this->language_id);
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
	 * @return Company the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
