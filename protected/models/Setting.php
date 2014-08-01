<?php

/**
 * This is the model class for table "setting".
 *
 * The followings are the available columns in table 'setting':
 * @property integer $id
 * @property string $a_email
 * @property string $currency
 * @property string $date_time
 * @property integer $status
 * @property integer $language_id
 *
 * The followings are the available model relations:
 * @property Language $language
 */
class Setting extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'setting';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('a_email, currency, language_id', 'required'),
			array('status, language_id', 'numerical', 'integerOnly'=>true),
			array('a_email', 'length', 'max'=>45),
			array('currency', 'length', 'max'=>10),
			array('date_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, a_email, currency, date_time, status, language_id', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'a_email' => 'A Email',
			'currency' => 'Currency',
			'date_time' => 'Date Time',
			'status' => 'Status',
			'language_id' => 'Language',
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
		$criteria->compare('a_email',$this->a_email,true);
		$criteria->compare('currency',$this->currency,true);
		$criteria->compare('date_time',$this->date_time,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('language_id',$this->language_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Setting the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
