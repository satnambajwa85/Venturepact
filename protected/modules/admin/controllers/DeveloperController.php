<?php

class DeveloperController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('index','view','profile','create','update','admin','delete'),
				'expression'=>"(!empty(Yii::app()->user->role) && Yii::app()->user->role=='admin')",
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		
		$this->render('view',array('model'=>$this->loadModel($id),));
	}

	public function actionProfile($id)
	{
		$profile	=	DeveloperRegister::model()->findByPk($id);
		if(!empty($profile)){
			foreach($profile->developerHasEducations as $DeveloperHasEducation){
				$profile->educations[]	=	$DeveloperHasEducation->id;
				$profile->school[]		=	(isset($DeveloperHasEducation->schools->name))?$DeveloperHasEducation->schools->name:'';
				$profile->degree[]		=	(isset($DeveloperHasEducation->degree->name))?$DeveloperHasEducation->degree->name:'';
				$profile->subject[]		=	(isset($DeveloperHasEducation->subject->title))?$DeveloperHasEducation->subject->title:'';
			}
			foreach($profile->developerHasPreviousCompanies as $companys){
				$profile->previous[]	=	$companys->id;
				$profile->company[]		=	(isset($companys->previousCompany->name))?$companys->previousCompany->name:'';
				$profile->role[]		=	$companys->role;
				$profile->start_time[]	=(date('Y-m-d',strtotime($companys->start_time))=='1970-01-01')?'':date('Y-m-d',strtotime($companys->start_time));
				$profile->end_time[]	=(date('Y-m-d',strtotime($companys->end_time))=='1970-01-01')?'':date('Y-m-d',strtotime($companys->end_time));
				$profile->link[]		=	$companys->link;
				$profile->description[]	=	$companys->description;
			}
			foreach($profile->accounts as $Account){
				$accountName			=	$Account->name;				
				$profile->$accountName	=	$Account->link;
			}
			foreach($profile->developerHasSkills as $skills){
				$indexSkill	=	$skills->skills->skillCategory->title.'_'.$skills->skills->skillCategory->id;
				$profile->skill[$indexSkill][]		=	$skills->skills->title;
				$profile->rating[$indexSkill][]		=	$skills->rateing;
			}			
			foreach($profile->developerHasProjects as $Projects){
				$profile->portfolio[]		=	$Projects->id;
				$profile->project[]			=	$Projects->name;
				$profile->url[]				=	$Projects->link;
				$profile->language[]		=	$Projects->description;
			}			
			foreach($profile->developerHasOpenSources as $DeveloperHasOpenSource){
				$profile->openSource[]		=	$DeveloperHasOpenSource->id;
				$profile->openProject[]		=	$DeveloperHasOpenSource->project_name;
				$profile->openUrl[]			=	$DeveloperHasOpenSource->link;
				$profile->openDetail[]		=	$DeveloperHasOpenSource->details;
				
			}			
			foreach($profile->references as $reference){
				$profile->reference[]		=	$reference->id;
				$profile->referenceName[]	=	$reference->name;
				$profile->referenceEmail[]	=	$reference->email;
				$profile->referencePhone[]	=	$reference->linkedIn_profile_url;
			}
			foreach($profile->recommendations as $recommendation){
				$profile->recommendation[]		=	$recommendation->id;
				$profile->recommendationName[]	=	$recommendation->name;
				$profile->recommendationEmail[]	=	$recommendation->email;
				$profile->recommendationPhone[]	=	$recommendation->phone_number;
			}
			foreach($profile->developerHasQuestions as $DeveloperHasQuestion){
				$profile->question[$DeveloperHasQuestion->questions_id]		=	$DeveloperHasQuestion->url;
			}
		}
		else
			$profile	=	new DeveloperRegister;
		
		$skillCategory	=	SkillCategory::model()->findAllByAttributes(array('status'=>'1'));
		$questionList	=	Questions::model()->findAllByAttributes(array('status'=>'1'));
		$this->render('profile',array('profile'=>$profile,'skillCategory'=>$skillCategory,'questions'=>$questionList));		
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Developer;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Developer']))
		{
			$model->attributes=$_POST['Developer'];
			$model->add_date=date('Y-m-d H:i');
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Developer']))
		{
			$model->attributes=$_POST['Developer'];
			$model->dob			=	(empty($_POST['Developer']['dob']))?NULL:$_POST['Developer']['dob'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Developer');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Developer('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Developer']))
			$model->attributes=$_GET['Developer'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Developer the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Developer::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Developer $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='developer-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
