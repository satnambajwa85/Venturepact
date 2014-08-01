<?php

/**
 * This is the model class for table "company_has_keywords".
 *
 * The followings are the available columns in table 'company_has_keywords':
 * @property integer $company_id
 * @property integer $keywords_id
 * @property integer $id
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Company $company
 * @property Keywords $keywords
 */
class CompanyHasKeywords extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'company_has_keywords';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('company_id, keywords_id', 'required'),
			array('company_id, keywords_id, status', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('company_id, keywords_id, id, status', 'safe', 'on'=>'search'),
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
			'company' => array(self::BELONGS_TO, 'Company', 'company_id'),
			'keywords' => array(self::BELONGS_TO, 'Keywords', 'keywords_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'company_id' => 'Company',
			'keywords_id' => 'Keywords',
			'id' => 'ID',
			'status' => 'Status',
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

		$criteria->compare('company_id',$this->company_id);
		$criteria->compare('keywords_id',$this->keywords_id);
		$criteria->compare('id',$this->id);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CompanyHasKeywords the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
