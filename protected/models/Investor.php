<?php

/**
 * This is the model class for table "investor".
 *
 * The followings are the available columns in table 'investor':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $link
 * @property string $contact
 * @property string $status
 * @property integer $state_id
 *
 * The followings are the available model relations:
 * @property CompanyHasInvestor[] $companyHasInvestors
 * @property State $state
 */
class Investor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'investor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public $country_id;
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, state_id', 'required'),
			array('state_id', 'numerical', 'integerOnly'=>true),
			array('name, link, contact, status', 'length', 'max'=>45),
			array('description', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id,country_id,name, description, link, contact, status, state_id', 'safe', 'on'=>'search'),
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
			'companyHasInvestors' => array(self::HAS_MANY, 'CompanyHasInvestor', 'Investor_id'),
			'state' => array(self::BELONGS_TO, 'State', 'state_id'),
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
			'description' => 'Description',
			'link' => 'Link',
			'contact' => 'Contact',
			'status' => 'Status',
			'state_id' => 'State',
			'country_id'=>'Country',
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
		$criteria->compare('description',$this->description,true);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('contact',$this->contact,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('state_id',$this->state_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Investor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
