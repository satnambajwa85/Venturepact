<?php

/**
 * This is the model class for table "project_requests".
 *
 * The followings are the available columns in table 'project_requests':
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $company_name
 * @property string $request_type
 * @property string $application_type
 * @property string $project_description
 * @property string $budget_min
 * @property string $budget_max
 * @property string $dead_line
 * @property string $is_flexible
 * @property string $language
 * @property string $size_of_company
 * @property string $progress_status
 * @property string $document_link
 * @property string $add_date
 * @property integer $status
 */
class ProjectRequests extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'project_requests';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, email, company_name, request_type, application_type, add_date', 'required'),
			array('status,budget_min, budget_max', 'numerical', 'integerOnly'=>true),
			array('name, email, company_name, request_type, application_type, is_flexible, language, progress_status, document_link', 'length', 'max'=>255),
			array('budget_min, budget_max, size_of_company', 'length', 'max'=>100),
			array('project_description, dead_line', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, email, company_name, request_type, application_type, project_description, budget_min, budget_max, dead_line, is_flexible, language, size_of_company, progress_status, document_link, add_date, status', 'safe', 'on'=>'search'),
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
			'company_name' => 'Company Name',
			'request_type' => 'Request Type',
			'application_type' => 'Application Type',
			'project_description' => 'Project Description',
			'budget_min' => 'Budget Min',
			'budget_max' => 'Budget Max',
			'dead_line' => 'Dead Line',
			'is_flexible' => 'Is Flexible',
			'language' => 'Language',
			'size_of_company' => 'Size Of Company',
			'progress_status' => 'Progress Status',
			'document_link' => 'Document Link',
			'add_date' => 'Add Date',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('company_name',$this->company_name,true);
		$criteria->compare('request_type',$this->request_type,true);
		$criteria->compare('application_type',$this->application_type,true);
		$criteria->compare('project_description',$this->project_description,true);
		$criteria->compare('budget_min',$this->budget_min,true);
		$criteria->compare('budget_max',$this->budget_max,true);
		$criteria->compare('dead_line',$this->dead_line,true);
		$criteria->compare('is_flexible',$this->is_flexible,true);
		$criteria->compare('language',$this->language,true);
		$criteria->compare('size_of_company',$this->size_of_company,true);
		$criteria->compare('progress_status',$this->progress_status,true);
		$criteria->compare('document_link',$this->document_link,true);
		$criteria->compare('add_date',$this->add_date,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProjectRequests the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
