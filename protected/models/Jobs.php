<?php

/**
 * This is the model class for table "jobs".
 *
 * The followings are the available columns in table 'jobs':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $salary_start
 * @property integer $salary_end
 * @property double $share_start
 * @property double $share_end
 * @property string $unit
 * @property string $add_date
 * @property integer $status
 * @property integer $category_id
 * @property integer $job_mode_id
 * @property string $image
 *
 * The followings are the available model relations:
 * @property CompanyHasJobs[] $companyHasJobs
 * @property Category $category
 * @property JobMode $jobMode
 */
class Jobs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jobs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, unit, category_id, job_mode_id', 'required'),
			array('salary_start, salary_end, status, category_id, job_mode_id', 'numerical', 'integerOnly'=>true),
			array('share_start, share_end', 'numerical'),
			array('name, image', 'length', 'max'=>45),
			array('unit', 'length', 'max'=>10),
			array('description, add_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, description, salary_start, salary_end, share_start, share_end, unit, add_date, status, category_id, job_mode_id, image', 'safe', 'on'=>'search'),
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
			'companyHasJobs' => array(self::HAS_MANY, 'CompanyHasJobs', 'jobs_id'),
			'category' => array(self::BELONGS_TO, 'Category', 'category_id'),
			'jobMode' => array(self::BELONGS_TO, 'JobMode', 'job_mode_id'),
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
			'salary_start' => 'Salary Start',
			'salary_end' => 'Salary End',
			'share_start' => 'Share Start',
			'share_end' => 'Share End',
			'unit' => 'Unit',
			'add_date' => 'Add Date',
			'status' => 'Status',
			'category_id' => 'Category',
			'job_mode_id' => 'Job Mode',
			'image' => 'Image',
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
		$criteria->compare('salary_start',$this->salary_start);
		$criteria->compare('salary_end',$this->salary_end);
		$criteria->compare('share_start',$this->share_start);
		$criteria->compare('share_end',$this->share_end);
        //$criteria->compare('unit',$this->unit,true);
		$criteria->compare('add_date',$this->add_date,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('job_mode_id',$this->job_mode_id);
		$criteria->compare('image',$this->image,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Jobs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
