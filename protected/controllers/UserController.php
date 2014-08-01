<?php
class UserController extends Controller
{
	/**
	 * Declares class-based actions.
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('interested','jobs2'),
				'users'=>array('*'),
			),
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','autoSave','profile','jobs','deleteRecord','status','html','interested','changePassword'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	
	public function actionIndex()
	{
		$profile		=	DeveloperRegister::model()->findByAttributes(array('users_id'=>Yii::app()->user->id));
		if(empty($profile))
			$profile	=	new DeveloperRegister;
		if($profile->status == 0)
			$this->redirect(array('/user/profile'));
		
		if(isset(Yii::app()->user->developerId)){
			
			$profile	=	DeveloperRegister::model()->findByPk(Yii::app()->user->developerId);
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
		}
		$skillCategory	=	SkillCategory::model()->findAllByAttributes(array('status'=>'1'));
		$questionList	=	Questions::model()->findAllByAttributes(array('status'=>'1'));
		$this->render('index',array('profile'=>$profile,'skillCategory'=>$skillCategory,'questions'=>$questionList));
	}
	
	public function actionProfile()
	{
        $skillCategory	=	SkillCategory::model()->findAllByAttributes(array('status'=>'1'));
		$questionList	=	Questions::model()->findAllByAttributes(array('status'=>'1'));
		$profile		=	DeveloperRegister::model()->findByAttributes(array('users_id'=>Yii::app()->user->id));
		
		
		$count	=	DeveloperHasEducation::model()->countByAttributes(array('developer_id'=>$profile->id));
		for($count;$count<2;$count++){
			$DeveloperHasEducation			=	new DeveloperHasEducation;
			$DeveloperHasEducation->developer_id=	$profile->id;
			$DeveloperHasEducation->subject_id	=	'';
			$DeveloperHasEducation->degree_id	=	'';
			$DeveloperHasEducation->schools_id	=	'';
			$DeveloperHasEducation->save();
		}
			
		$count	=	DeveloperHasPreviousCompany::model()->countByAttributes(array('developer_id'=>$profile->id));
		for($count;$count<1;$count++){
			$DeveloperHasPreviousCompany	=	new DeveloperHasPreviousCompany;								
			$DeveloperHasPreviousCompany->developer_id			=	$profile->id;
			$DeveloperHasPreviousCompany->previous_company_id	=	'';
			$DeveloperHasPreviousCompany->save();
		}
			$count	=	DeveloperHasProjects::model()->countByAttributes(array('developer_id'=>$profile->id));
			for($count;$count<2;$count++){
				$projectAdd					=	new DeveloperHasProjects;
				$projectAdd->developer_id	=	$profile->id;
				$projectAdd->save();
			}
			/*$count	=	DeveloperHasOpenSource::model()->countByAttributes(array('developer_id'=>$profile->id));
			for($count;$count<2;$count++){
				$developerHasOpenSource				=	new	DeveloperHasOpenSource;
				$developerHasOpenSource->developer_id	=	$profile->id;
				$developerHasOpenSource->save();
			}*/
			
			$count	=	References::model()->countByAttributes(array('developer_id'=>$profile->id));
			for($count;$count<2;$count++){
				$references				=	new	References;
				$references->developer_id	=	$profile->id;
				$references->name	=	'';
				$references->email	=	'';
				$references->linkedIn_profile_url	=	'';
				$references->save();
			}
			
			$count	=	Recommendations::model()->countByAttributes(array('developer_id'=>$profile->id));
			for($count;$count<2;$count++){
				$Recommendations				=	new	Recommendations;
                $Recommendations->name	=	'';
				$Recommendations->email	=	'';
				$Recommendations->linked_in_profile	=	'';
                $Recommendations->phone_number='';
				$Recommendations->developer_id	=	$profile->id;
				$Recommendations->save();
			}
						
		
		if(empty($profile))
			$profile	=	new DeveloperRegister;
		if($profile->status!=0)
			$this->redirect(array('/user'));
		if(isset($_POST['DeveloperRegister'])){
			$profile->attributes	=	$_POST['DeveloperRegister'];
			$profile->users_id		=	Yii::app()->user->id;
			$profile->state_id		=	1;
			$profile->time_zone_id	=	1;
			$profile->add_date		=	date('Y-m-d H:i:s');
			$profile->status		=	1;
			if($profile->save()){
                $data['name']		=	$profile->first_name;
                $data['email']		=	$profile->alternative_email;
                $data['applicant']	=	$profile->first_name.' '.$profile->last_name;
                $this->sendMail($data,'application');
                
                
				Yii::app()->user->developerId		=	$profile->id;
				Yii::app()->user->developerStatus	=	$profile->status;
				if(!empty($_POST['DeveloperRegister']['educations']))
				foreach($_POST['DeveloperRegister']['educations'] as $key=>$educations){
					$school		=	(isset($_POST['DeveloperRegister']['school'][$key]))?$_POST['DeveloperRegister']['school'][$key]:'';
					$degree		=	(isset($_POST['DeveloperRegister']['degree'][$key]))?$_POST['DeveloperRegister']['degree'][$key]:'';
					$subject	=	(isset($_POST['DeveloperRegister']['subject'][$key]))?$_POST['DeveloperRegister']['subject'][$key]:'';
					
					$schools	=	Schools::model()->findByAttributes(array('name'=>$school));
					if(empty($schools)){
						$schools	= new Schools;
						$schools->description	=	'Added By WebSite User';
					}
					$schools->name		=	$school;
					$schools->state_id	= 1;
					$schools->status	=	1;
					$schools->save();

					$Degrees	=	Degree::model()->findByAttributes(array('name'=>$degree));
					if(empty($Degrees)){
						$Degrees	= new Degree;
						$Degrees->description	=	'Added By WebSite User';
						$Degrees->name		=	$degree;
						$Degrees->status	=	1;
					}
					$Degrees->save();
					
					$Subjects	=	Subject::model()->findByAttributes(array('title'=>$subject));
					if(empty($Subjects)){
						$Subjects	= new Subject;
						$Subjects->description	=	'Added By WebSite User';
						$Subjects->add_date		=	date('Y-m-d H:i:s');							
					}
					$Subjects->title	=	$subject;
					$Subjects->status	=	1;
					$Subjects->save();
					if(!empty($Subjects->id)|| !empty($Degrees->id)|| !empty($schools->id))
					{
						$DeveloperHasEducation	= DeveloperHasEducation::model()->findByPk($educations);
						if(empty($DeveloperHasEducation))
							$DeveloperHasEducation	= DeveloperHasEducation::model()->findByAttributes(array('subject_id'=>$Subjects->id,'degree_id'=>$Degrees->id,'schools_id'=>$schools->id,'developer_id'=>$profile->id));
						if(empty($DeveloperHasEducation))
							$DeveloperHasEducation			=	new DeveloperHasEducation;
						$DeveloperHasEducation->subject_id	=	(isset($Subjects->id))?$Subjects->id:'';
                        $DeveloperHasEducation->degree_id	=	(isset($Degrees->id))?$Degrees->id:'';
                        $DeveloperHasEducation->schools_id	=	(isset($schools->id))?$schools->id:'';
						$DeveloperHasEducation->developer_id=	$profile->id;
						$DeveloperHasEducation->save();
					}
					
				}
				
				//Company Experiance Details for the developer
				//DeveloperHasPreviousCompany::model()->deleteAll('developer_id = ?' , array($profile->id));
				if(!empty($_POST['DeveloperRegister']['previous']))
				foreach($_POST['DeveloperRegister']['previous'] as $key=>$previous){
					$company	=	(isset($_POST['DeveloperRegister']['company'][$key]))?$_POST['DeveloperRegister']['company'][$key]:'';
					
					$companys	=	PreviousCompany::model()->findByAttributes(array('name'=>$company));
					if(empty($companys)){
						$companys	= new PreviousCompany;
						$companys->description	=	'Added By WebSite User';
						$companys->name		=	$company;
						$companys->status	=	1;
						$companys->save();
					}
						
					$DeveloperHasPreviousCompany	= DeveloperHasPreviousCompany::model()->findByPk($previous);
					if(empty($DeveloperHasPreviousCompany))
						$DeveloperHasPreviousCompany	=	new DeveloperHasPreviousCompany;								
					$DeveloperHasPreviousCompany->previous_company_id	=	(isset($companys->id))?$companys->id:'';
					$DeveloperHasPreviousCompany->developer_id			=	$profile->id;
					$DeveloperHasPreviousCompany->role			=	(isset($_POST['DeveloperRegister']['role'][$key]))?$_POST['DeveloperRegister']['role'][$key]:'';
					$DeveloperHasPreviousCompany->start_time	=	(isset($_POST['DeveloperRegister']['start_time'][$key]))?date('Y-m-d',strtotime($_POST['DeveloperRegister']['start_time'][$key])):'';
					$DeveloperHasPreviousCompany->end_time		=	(isset($_POST['DeveloperRegister']['end_time'][$key]))?date('Y-m-d',strtotime($_POST['DeveloperRegister']['end_time'][$key])):'';
					$DeveloperHasPreviousCompany->link			=	(isset($_POST['DeveloperRegister']['link'][$key]))?$_POST['DeveloperRegister']['link'][$key]:'';
					$DeveloperHasPreviousCompany->description	=	(isset($_POST['DeveloperRegister']['description'][$key]))?$_POST['DeveloperRegister']['description'][$key]:'';
					if(!empty($companys->id)||!empty($_POST['DeveloperRegister']['link'][$key])||!empty($_POST['DeveloperRegister']['start_time'][$key])||!empty($_POST['DeveloperRegister']['end_time'][$key])||!empty($_POST['DeveloperRegister']['role'][$key])||!empty($_POST['DeveloperRegister']['description'][$key]))
					{
						$DeveloperHasPreviousCompany->save();
					}
					
				}
				if(!empty($_POST['DeveloperRegister']['gitHub'])){
					$accounts	=	Accounts::model()->findByAttributes(array('name'=>'gitHub','developer_id'=>$profile->id));
					if(empty($accounts)){
						$accounts			=	new Accounts;
						$accounts->name		=	'gitHub';
						$accounts->add_date	=	date('Y-m-d H:i:s');
					}
					$accounts->link			=	$_POST['DeveloperRegister']['gitHub'];
					$accounts->developer_id	=	$profile->id;
					$accounts->status		=	1;
					if($accounts->save()){
						$profile->gitHub = $accounts->link;
					}
				}
				//Developer Skills Details
				DeveloperHasSkills::model()->deleteAll('developer_id = ?' , array($profile->id));
				if(!empty($_POST['DeveloperRegister']['skill']))
				foreach($_POST['DeveloperRegister']['skill'] as $key=>$skills){
					$categ	=	explode('_',$key);
					$category	=	$categ[1];
					foreach($skills as $key2=>$skill){
						if(!empty($skill)){
						$skillAdd =	Skills::model()->findByAttributes(array('title'=>$skill,'skill_category_id'=>$category));
							if(empty($skillAdd)){
								$skillAdd	= new Skills;
								$skillAdd->description		=	'Added By WebSite User';
								$skillAdd->title			=	$skill;
								$skillAdd->status			=	1;
								$skillAdd->skill_category_id=	$category;					
							}
							
							if($skillAdd->save()){
								$developerHasSkills	= DeveloperHasSkills::model()->findByAttributes(array('skills_id'=>$skillAdd->id,'developer_id'=>$profile->id));
								if(empty($developerHasSkills))
									$developerHasSkills	=	new DeveloperHasSkills;
								$developerHasSkills->skills_id		=	$skillAdd->id;
								$developerHasSkills->developer_id	=	$profile->id;
								$developerHasSkills->rateing		=	(isset($_POST['DeveloperRegister']['rating'][$key][$key2]))?$_POST['DeveloperRegister']['rating'][$key][$key2]:'0';
								$developerHasSkills->save();
							}
						}
					}
				}
				//Developer Portfolio Project Details
			
				
				
				if(!empty($_POST['DeveloperRegister']['portfolio']))
				foreach($_POST['DeveloperRegister']['portfolio'] as $key=>$portfolio){
					$project	=	(isset($_POST['DeveloperRegister']['project'][$key]))?$_POST['DeveloperRegister']['project'][$key]:'';
					$url		=	(isset($_POST['DeveloperRegister']['url'][$key]))?$_POST['DeveloperRegister']['url'][$key]:'';
					$language	=	(isset($_POST['DeveloperRegister']['language'][$key]))?$_POST['DeveloperRegister']['language'][$key]:'';
					$projectAdd				=	DeveloperHasProjects::model()->findByPk($portfolio);
					if(empty($projectAdd))
						$projectAdd			=	new DeveloperHasProjects;
					$projectAdd->description=	$language;
					$projectAdd->name		=	$project;
					$projectAdd->link		=	$url;
					$projectAdd->framework	=	'';
					$projectAdd->status		=	1;
					$projectAdd->developer_id		=	$profile->id;
					$projectAdd->save();
					
				}
				//Developer References
				
				if(!empty($_POST['DeveloperRegister']['reference']))
				foreach($_POST['DeveloperRegister']['reference'] as $key=>$reference){
					$referenceName	=(isset($_POST['DeveloperRegister']['referenceName'][$key]))?$_POST['DeveloperRegister']['referenceName'][$key]:'';
					$referencePhone	=(isset($_POST['DeveloperRegister']['referencePhone'][$key]))?$_POST['DeveloperRegister']['referencePhone'][$key]:'';
					$referenceEmail	=(isset($_POST['DeveloperRegister']['referenceEmail'][$key]))?$_POST['DeveloperRegister']['referenceEmail'][$key]:'';
					$references	=	References::model()->findByPk($reference);
					
					if(empty($references)){
						$references				=	new	References;
						
					}
					$references->developer_id	=	$profile->id;
					$references->name			=	$referenceName;
					$references->email			=	$referenceEmail;
					$references->linkedIn_profile_url			=	$referencePhone;
					$references->status			=	1;
					if($references->save()){
						$data['name']	=	$referenceName;
						$data['email']	=	$referenceEmail;
						$data['applicant']	=	$profile->first_name.' '.$profile->last_name;
						$this->sendMail($data,'references');							
					}
					
				}
				//Developer Recommendations
                //Recommendations::model()->deleteAll('developer_id = ?' , array($profile->id));
				if(!empty($_POST['DeveloperRegister']['recommendation']))
				foreach($_POST['DeveloperRegister']['recommendation'] as $key=>$recommendation){
		
		$recommendationName=(isset($_POST['DeveloperRegister']['recommendationName'][$key]))?$_POST['DeveloperRegister']['recommendationName'][$key]:'';
		$recommendationPhone=(isset($_POST['DeveloperRegister']['recommendationPhone'][$key]))?$_POST['DeveloperRegister']['recommendationPhone'][$key]:'';
		$recommendationEmail=(isset($_POST['DeveloperRegister']['recommendationEmail'][$key]))?$_POST['DeveloperRegister']['recommendationEmail'][$key]:'';
					
					
					$recommendation	=	Recommendations::model()->findByPk($recommendation);
					
					if(empty($recommendation)){
						$recommendation				=	new	Recommendations;
						
					}
					$recommendation->developer_id	=	$profile->id;
					$recommendation->name			=	$recommendationName;
					$recommendation->email			=	$recommendationEmail;
					$recommendation->phone_number	=	$recommendationPhone;
					$recommendation->status			=	1;
					if($recommendation->save()){
						$data['id']     =	$recommendation->id;
						$data['name']	=	$recommendationName;
						$data['email']	=	$recommendationEmail;
						$data['applicant']	=	$profile->first_name.' '.$profile->last_name;
						$this->sendMail($data,'recommendation');
					}
					
				}
				//Developer question
				if(!empty($_POST['DeveloperRegister']['question']))
				foreach($_POST['DeveloperRegister']['question'] as $key=>$question){
					if(!empty($question)){
						$developerHasQuestions	=DeveloperHasQuestions::model()->findByAttributes(array('developer_id'=>$profile->id,'questions_id'=>$key));
						if(empty($developerHasQuestions))
							$developerHasQuestions				=	new	DeveloperHasQuestions;
						$developerHasQuestions->developer_id	=	$profile->id;
						$developerHasQuestions->questions_id	=	$key;
						$developerHasQuestions->url				=	$question;
						$developerHasQuestions->save();
					}
				}
				Yii::app()->user->setFlash('success1','Your Application has been submitted!'); 
				$this->redirect(array('/user'));               
			}
		}
		if(isset(Yii::app()->user->developerId)){
			$profile	=	DeveloperRegister::model()->findByPk(Yii::app()->user->developerId);
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
		}
		
		$this->render('profile',array('profile'=>$profile,'skillCategory'=>$skillCategory,'questions'=>$questionList));
	}
	
    public function actionAutoSave()
	{
		$profile		=	DeveloperRegister::model()->findByAttributes(array('users_id'=>Yii::app()->user->id));
		if(empty($profile))
			$profile	=	new DeveloperRegister;
		if($profile->status)
			die;
		
		if(isset($_POST['DeveloperRegister'])){
			$profile->attributes	=	$_POST['DeveloperRegister'];
			$profile->users_id		=	Yii::app()->user->id;
			$profile->state_id		=	1;
			$profile->time_zone_id	=	1;
			$profile->add_date		=	date('Y-m-d H:i:s');
			if($profile->save()){
				$data['name']		=	$profile->first_name;
                $data['email']		=	$profile->alternative_email;
                $data['applicant']	=	$profile->first_name.' '.$profile->last_name;
                if(!empty($_POST['DeveloperRegister']['educations']))
				foreach($_POST['DeveloperRegister']['educations'] as $key=>$educations){
					$school		=	(isset($_POST['DeveloperRegister']['school'][$key]))?$_POST['DeveloperRegister']['school'][$key]:'';
					$degree		=	(isset($_POST['DeveloperRegister']['degree'][$key]))?$_POST['DeveloperRegister']['degree'][$key]:'';
					$subject	=	(isset($_POST['DeveloperRegister']['subject'][$key]))?$_POST['DeveloperRegister']['subject'][$key]:'';
					
					$schools	=	Schools::model()->findByAttributes(array('name'=>$school));
					if(empty($schools)){
						$schools	= new Schools;
						$schools->description	=	'Added By WebSite User';
					}
					$schools->name		=	$school;
					$schools->state_id	= 1;
					$schools->status	=	1;
					$schools->save();

					$Degrees	=	Degree::model()->findByAttributes(array('name'=>$degree));
					if(empty($Degrees)){
						$Degrees	= new Degree;
						$Degrees->description	=	'Added By WebSite User';
						$Degrees->name		=	$degree;
						$Degrees->status	=	1;
					}
					$Degrees->save();
					
					$Subjects	=	Subject::model()->findByAttributes(array('title'=>$subject));
					if(empty($Subjects)){
						$Subjects	= new Subject;
						$Subjects->description	=	'Added By WebSite User';
						$Subjects->add_date		=	date('Y-m-d H:i:s');							
					}
					$Subjects->title	=	$subject;
					$Subjects->status	=	1;
					$Subjects->save();
					if(!empty($Subjects->id)|| !empty($Degrees->id)|| !empty($schools->id))
					{
						$DeveloperHasEducation	= DeveloperHasEducation::model()->findByPk($educations);
						if(empty($DeveloperHasEducation))
							$DeveloperHasEducation	= DeveloperHasEducation::model()->findByAttributes(array('subject_id'=>$Subjects->id,'degree_id'=>$Degrees->id,'schools_id'=>$schools->id,'developer_id'=>$profile->id));
                        $DeveloperHasEducation->subject_id	=	(isset($Subjects->id))?$Subjects->id:'';
                        $DeveloperHasEducation->degree_id	=	(isset($Degrees->id))?$Degrees->id:'';
                        $DeveloperHasEducation->schools_id	=	(isset($schools->id))?$schools->id:'';
						$DeveloperHasEducation->developer_id=	$profile->id;
						$DeveloperHasEducation->save();
					}
					
				}
				
				if(!empty($_POST['DeveloperRegister']['previous']))
				foreach($_POST['DeveloperRegister']['previous'] as $key=>$previous){
					$company	=	(isset($_POST['DeveloperRegister']['company'][$key]))?$_POST['DeveloperRegister']['company'][$key]:'';
					
					$companys	=	PreviousCompany::model()->findByAttributes(array('name'=>$company));
					if(empty($companys)){
						$companys	= new PreviousCompany;
						$companys->description	=	'Added By WebSite User';
						$companys->name		=	$company;
						$companys->status	=	1;
						$companys->save();
					}
					$DeveloperHasPreviousCompany	= DeveloperHasPreviousCompany::model()->findByPk($previous);
					$DeveloperHasPreviousCompany->previous_company_id	=	(isset($companys->id))?$companys->id:'';
					$DeveloperHasPreviousCompany->developer_id			=	$profile->id;
					$DeveloperHasPreviousCompany->role			=	(isset($_POST['DeveloperRegister']['role'][$key]))?$_POST['DeveloperRegister']['role'][$key]:'';
					$DeveloperHasPreviousCompany->start_time	=	(isset($_POST['DeveloperRegister']['start_time'][$key]))?date('Y-m-d',strtotime($_POST['DeveloperRegister']['start_time'][$key])):'';
					$DeveloperHasPreviousCompany->end_time		=	(isset($_POST['DeveloperRegister']['end_time'][$key]))?date('Y-m-d',strtotime($_POST['DeveloperRegister']['end_time'][$key])):'';
					$DeveloperHasPreviousCompany->link			=	(isset($_POST['DeveloperRegister']['link'][$key]))?$_POST['DeveloperRegister']['link'][$key]:'';
					$DeveloperHasPreviousCompany->description	=	(isset($_POST['DeveloperRegister']['description'][$key]))?$_POST['DeveloperRegister']['description'][$key]:'';
					$DeveloperHasPreviousCompany->save();
					
				}
				/*if(!empty($_POST['DeveloperRegister']['linkedIn'])){					
					$accounts =	Accounts::model()->findByAttributes(array('name'=>'linkedIn','developer_id'=>$profile->id));
					if(empty($accounts)){
						$accounts			=	new Accounts;
						$accounts->name		=	'linkedIn';
						$accounts->add_date	=	date('Y-m-d H:i:s');
					}
					$accounts->link			=	$_POST['DeveloperRegister']['linkedIn'];
					$accounts->developer_id	=	$profile->id;
					$accounts->status		=	1;
					if($accounts->save()){
						$profile->linkedIn = $accounts->link;
					}
				}
				if(!empty($_POST['DeveloperRegister']['twitter'])){
					$accounts	=	Accounts::model()->findByAttributes(array('name'=>'twitter','developer_id'=>$profile->id));
					if(empty($accounts)){
						$accounts			=	new Accounts;
						$accounts->name		=	'twitter';
						$accounts->add_date	=	date('Y-m-d H:i:s');
					}
					$accounts->link			=	(isset($_POST['DeveloperRegister']['twitter']))?$_POST['DeveloperRegister']['twitter']:'';
					$accounts->developer_id	=	$profile->id;
					$accounts->status		=	1;					
					if($accounts->save()){
						$profile->twitter = $accounts->link;
					}
				}
				else
					Accounts::model()->deleteAllByAttributes(array('name'=>'twitter','developer_id'=>$profile->id));
					*/
				if(!empty($_POST['DeveloperRegister']['gitHub'])){
					$accounts	=	Accounts::model()->findByAttributes(array('name'=>'gitHub','developer_id'=>$profile->id));
					if(empty($accounts)){
						$accounts			=	new Accounts;
						$accounts->name		=	'gitHub';
						$accounts->add_date	=	date('Y-m-d H:i:s');
					}
					$accounts->link			=	(isset($_POST['DeveloperRegister']['gitHub']))?$_POST['DeveloperRegister']['gitHub']:'';
					$accounts->developer_id	=	$profile->id;
					$accounts->status		=	1;
					if($accounts->save()){
						$profile->gitHub = $accounts->link;
					}
				}
				else
					Accounts::model()->deleteAllByAttributes(array('name'=>'gitHub','developer_id'=>$profile->id));
				
				/*if(!empty($_POST['DeveloperRegister']['website'])){
					$accounts	=	Accounts::model()->findByAttributes(array('name'=>'website','developer_id'=>$profile->id));
					if(empty($accounts)){
						$accounts			=	new Accounts;
						$accounts->name		=	'website';
						$accounts->add_date	=	date('Y-m-d H:i:s');
					}
					$accounts->link			=	(isset($_POST['DeveloperRegister']['website']))?$_POST['DeveloperRegister']['topCoder']:'';
					$accounts->developer_id	=	$profile->id;
					$accounts->status		=	1;
					if($accounts->save()){
						$profile->website = $accounts->link;
					}
				}else
					Accounts::model()->deleteAllByAttributes(array('name'=>'website','developer_id'=>$profile->id));
				
				if(!empty($_POST['DeveloperRegister']['topCoder'])){
					$accounts =	Accounts::model()->findByAttributes(array('name'=>'topCoder','developer_id'=>$profile->id));
					if(empty($accounts)){
						$accounts			=	new Accounts;
						$accounts->name		=	'topCoder';
						$accounts->add_date	=	date('Y-m-d H:i:s');
					}
					$accounts->link			=	(isset($_POST['DeveloperRegister']['topCoder']))?$_POST['DeveloperRegister']['topCoder']:'';
					$accounts->developer_id	=	$profile->id;
					$accounts->status		=	1;
					if($accounts->save()){
						$profile->topCoder = $accounts->link;
					}
				}else
					Accounts::model()->deleteAllByAttributes(array('name'=>'topCoder','developer_id'=>$profile->id));
				
				if(!empty($_POST['DeveloperRegister']['codeChef'])){
					$accounts =	Accounts::model()->findByAttributes(array('name'=>'codeChef','developer_id'=>$profile->id));
					if(empty($accounts)){
						$accounts			=	new Accounts;
						$accounts->name		=	'codeChef';
						$accounts->add_date	=	date('Y-m-d H:i:s');
					}
					$accounts->link			=	(isset($_POST['DeveloperRegister']['codeChef']))?$_POST['DeveloperRegister']['codeChef']:'';
					$accounts->developer_id	=	$profile->id;
					$accounts->status		=	1;
					if($accounts->save()){
						$profile->codeChef = $accounts->link;
					}
				}else
					Accounts::model()->deleteAllByAttributes(array('name'=>'codeChef','developer_id'=>$profile->id));*/
				
				DeveloperHasSkills::model()->deleteAll('developer_id = ?' , array($profile->id));
				if(!empty($_POST['DeveloperRegister']['skill']))
				foreach($_POST['DeveloperRegister']['skill'] as $key=>$skills){
					$categ	=	explode('_',$key);
					$category	=	$categ[1];
					foreach($skills as $key2=>$skill){
						if(!empty($skill)){
						$skillAdd =	Skills::model()->findByAttributes(array('title'=>$skill,'skill_category_id'=>$category));
							if(empty($skillAdd)){
								$skillAdd	= new Skills;
								$skillAdd->description		=	'Added By WebSite User';
								$skillAdd->title			=	$skill;
								$skillAdd->status			=	1;
								$skillAdd->skill_category_id=	$category;					
							}
							
							if($skillAdd->save()){
								$developerHasSkills	= DeveloperHasSkills::model()->findByAttributes(array('skills_id'=>$skillAdd->id,'developer_id'=>$profile->id));
								if(empty($developerHasSkills))
									$developerHasSkills	=	new DeveloperHasSkills;
								$developerHasSkills->skills_id		=	$skillAdd->id;
								$developerHasSkills->developer_id	=	$profile->id;
								$developerHasSkills->rateing		=	(isset($_POST['DeveloperRegister']['rating'][$key][$key2]))?$_POST['DeveloperRegister']['rating'][$key][$key2]:'0';
								$developerHasSkills->save();
							}
						}
					}
				}
				//Developer Portfolio Project Details
				if(!empty($_POST['DeveloperRegister']['portfolio']))
				foreach($_POST['DeveloperRegister']['portfolio'] as $key=>$portfolio){
					$project	=	(isset($_POST['DeveloperRegister']['project'][$key]))?$_POST['DeveloperRegister']['project'][$key]:'';
					$url		=	(isset($_POST['DeveloperRegister']['url'][$key]))?$_POST['DeveloperRegister']['url'][$key]:'';
					$language	=	(isset($_POST['DeveloperRegister']['language'][$key]))?$_POST['DeveloperRegister']['language'][$key]:'';
					$projectAdd				=	DeveloperHasProjects::model()->findByPk($portfolio);
					$projectAdd->description=	$language;
					$projectAdd->name		=	$project;
					$projectAdd->link		=	$url;
					$projectAdd->framework	=	'';
					$projectAdd->status		=	1;
					$projectAdd->developer_id		=	$profile->id;
					$projectAdd->save();
					
				}
				/*if(!empty($_POST['DeveloperRegister']['openSource']))
				foreach($_POST['DeveloperRegister']['openSource'] as $key=>$openSource){
					$openUrl		=	(isset($_POST['DeveloperRegister']['openUrl'][$key]))?$_POST['DeveloperRegister']['openUrl'][$key]:'';
					$openDetail		=	(isset($_POST['DeveloperRegister']['openDetail'][$key]))?$_POST['DeveloperRegister']['openDetail'][$key]:'';
					$openProject	=	(isset($_POST['DeveloperRegister']['openProject'][$key]))?$_POST['DeveloperRegister']['openProject'][$key]:'';
					
					$developerHasOpenSource	=	DeveloperHasOpenSource::model()->findByPk($openSource);
					$developerHasOpenSource->developer_id	=	$profile->id;
					$developerHasOpenSource->status			=	1;
					$developerHasOpenSource->details		=	$openDetail;
					$developerHasOpenSource->project_name	=	$openProject;
					$developerHasOpenSource->link			=	$openUrl;
					$developerHasOpenSource->save();
				}*/

				//Developer References
				//References::model()->deleteAll('developer_id = ?' , array($profile->id));
				if(!empty($_POST['DeveloperRegister']['reference']))
				foreach($_POST['DeveloperRegister']['reference'] as $key=>$reference){
					$referenceName	=(isset($_POST['DeveloperRegister']['referenceName'][$key]))?$_POST['DeveloperRegister']['referenceName'][$key]:'';
					$referencePhone	=(isset($_POST['DeveloperRegister']['referencePhone'][$key]))?$_POST['DeveloperRegister']['referencePhone'][$key]:'';
					$referenceEmail	=(isset($_POST['DeveloperRegister']['referenceEmail'][$key]))?$_POST['DeveloperRegister']['referenceEmail'][$key]:'';
					$references	=	References::model()->findByPk($reference);
					$mail	=	0;
					$references->developer_id	=	$profile->id;
					$references->name			=	$referenceName;
					$references->email			=	$referenceEmail;
					$references->linkedIn_profile_url			=	$referencePhone;
					$references->status			=	1;
					$references->save();
				}
				//Developer Recommendations
                //Recommendations::model()->deleteAll('developer_id = ?' , array($profile->id));
				if(!empty($_POST['DeveloperRegister']['recommendation']))
				foreach($_POST['DeveloperRegister']['recommendation'] as $key=>$recommendation){
		
		$recommendationName=(isset($_POST['DeveloperRegister']['recommendationName'][$key]))?$_POST['DeveloperRegister']['recommendationName'][$key]:'';
		$recommendationPhone=(isset($_POST['DeveloperRegister']['recommendationPhone'][$key]))?$_POST['DeveloperRegister']['recommendationPhone'][$key]:'';
		$recommendationEmail=(isset($_POST['DeveloperRegister']['recommendationEmail'][$key]))?$_POST['DeveloperRegister']['recommendationEmail'][$key]:'';
					
					$recommendation	=	Recommendations::model()->findByPk($recommendation);
					$mail			=	0;
					if(empty($recommendation)){
						$recommendation				=	new	Recommendations;
						$mail	=	0;
					}
					$recommendation->developer_id	=	$profile->id;
					$recommendation->name			=	$recommendationName;
					$recommendation->email			=	$recommendationEmail;
					$recommendation->phone_number	=	$recommendationPhone;
					$recommendation->status			=	1;
					if($recommendation->save() && $mail){
						$data['id']     =	$recommendation->id;
						$data['name']	=	$recommendationName;
						$data['email']	=	$recommendationEmail;
						$data['applicant']	=	$profile->first_name.' '.$profile->last_name;
					}
				}
				//Developer question
				if(!empty($_POST['DeveloperRegister']['question']))
				foreach($_POST['DeveloperRegister']['question'] as $key=>$question){
					if(!empty($question)){
						$developerHasQuestions	=DeveloperHasQuestions::model()->findByAttributes(array('developer_id'=>$profile->id,'questions_id'=>$key));
						if(empty($developerHasQuestions))
							$developerHasQuestions				=	new	DeveloperHasQuestions;
						$developerHasQuestions->developer_id	=	$profile->id;
						$developerHasQuestions->questions_id	=	$key;
						$developerHasQuestions->url				=	$question;
						$developerHasQuestions->save();
					}
				}
			}

		}
		die('done');
	}
	public function actionHtml(){
		$profile		=	DeveloperRegister::model()->findByAttributes(array('users_id'=>Yii::app()->user->id));
		
		if($_REQUEST['case']=='education'){
			$DeveloperHasEducation			=	new DeveloperHasEducation;
			$DeveloperHasEducation->subject_id	=	'';
			$DeveloperHasEducation->degree_id	=	'';
			$DeveloperHasEducation->schools_id	=	'';
			$DeveloperHasEducation->developer_id=	$profile->id;
			$DeveloperHasEducation->save();
			$count	=	$DeveloperHasEducation->id;
			echo '<input type="hidden" id="DeveloperRegister_educations_'.$count.'" name="DeveloperRegister[educations]['.$count.']" value="'.$count.'"><input type="text" id="DeveloperRegister_school_'.$count.'" name="DeveloperRegister[school]['.$count.']" class="textarea_w size3 1&quot;" placeholder="Enter your school" value=""><input type="text" id="DeveloperRegister_degree_'.$count.'" name="DeveloperRegister[degree]['.$count.']" class="textarea_w size3 1&quot;" placeholder="Enter your degree" value=""><input type="text" id="DeveloperRegister_subject_'.$count.'" name="DeveloperRegister[subject]['.$count.']" class="textarea_w size4 1&quot;" placeholder="Enter your subject" value=""> <a class="profile_cancel textarea_cross" href="javascript:void(0);" rel="'.CController::createUrl("/user/deleteRecord",array('id'=>$count,'case'=>'education')).'"></a>';
		}
		if($_REQUEST['case']=='company'){
			$DeveloperHasPreviousCompany	=	new DeveloperHasPreviousCompany;
			$DeveloperHasPreviousCompany->developer_id=	$profile->id;
            $DeveloperHasPreviousCompany->previous_company_id	=	'';
			$DeveloperHasPreviousCompany->save();
			$count	=	$DeveloperHasPreviousCompany->id;
			echo '<div class="inner_left "><input value="'.$count.'" class="textarea_w" name="DeveloperRegister[previous]['.$count.']" id="DeveloperRegister_previous_0" type="hidden"><input value="" placeholder="Company" class="textarea_w GINGER_SOFTWARE_control" name="DeveloperRegister[company]['.$count.']" id="DeveloperRegister_company_0" type="text" spellcheck="false" ginger_software_editor="true"><input value="" placeholder="Role" class="textarea_w" name="DeveloperRegister[role]['.$count.']" id="DeveloperRegister_role_0" type="text"><input value="" placeholder="From" class="textarea size7 date from" title="YYYY-MM-DD" name="DeveloperRegister[start_time]['.$count.']" id="DeveloperRegister_start_time_0" type="text">    <input value="" placeholder="Till" class="textarea size8 date to" title="YYYY-MM-DD" name="DeveloperRegister[end_time]['.$count.']" id="DeveloperRegister_end_time_0" type="text">                                </div><div class="inner_right"><textarea placeholder="What did you work on?" class="textarea_w" rows="5" name="DeveloperRegister[description]['.$count.']" id="DeveloperRegister_description_0"></textarea></div></div> <a class="profile_cancel textarea_cross" href="javascript:void(0);" rel="'.CController::createUrl("/user/deleteRecord",array('id'=>$count,'case'=>'company')).'"></a>';
		}
		if($_REQUEST['case']=='portfolio'){
			$DeveloperHasProjects	=	new DeveloperHasProjects;
			$DeveloperHasProjects->developer_id=	$profile->id;
			
			$DeveloperHasProjects->save();
			$count	=	$DeveloperHasProjects->id;
			echo '<input type="hidden" id="DeveloperRegister_portfolio_0" name="DeveloperRegister[portfolio]['.$count.']" class="portfolio" value="'.$count.'"><input type="text" id="DeveloperRegister_url_0" name="DeveloperRegister[url]['.$count.']" class="textarea_w size9  url" placeholder="URL" value=""><input type="text" id="DeveloperRegister_project_0" name="DeveloperRegister[project]['.$count.']" class="project textarea_w size9  " placeholder="Description" value=""><input type="text" id="DeveloperRegister_language_0" name="DeveloperRegister[language]['.$count.']" class="language textarea_w size4  " placeholder="Language/framework used" value=""> <a class="profile_cancel textarea_cross" href="javascript:void(0);"  rel="'.CController::createUrl("/user/deleteRecord",array('id'=>$count,'case'=>'portfolio')).'"></a>';
		}
		if($_REQUEST['case']=='opensource'){
			$DeveloperHasOpenSource	=	new DeveloperHasOpenSource;
			$DeveloperHasOpenSource->developer_id=	$profile->id;
			$DeveloperHasOpenSource->save();
			$count	=	$DeveloperHasOpenSource->id;
			echo '<input type="hidden" id="DeveloperRegister_openSource_0" name="DeveloperRegister[openSource]['.$count.']" class="textarea_w size9 source" value="'.$count.'"><input type="text" id="DeveloperRegister_openUrl_0" name="DeveloperRegister[openUrl]['.$count.']" class="textarea_w size9  url" placeholder="Github URL" value=""><input type="text" id="DeveloperRegister_openProject_0" name="DeveloperRegister[openProject]['.$count.']" class="textarea_w size9  project" placeholder="Your contribution" value=""><input type="text" id="DeveloperRegister_openDetail_0" name="DeveloperRegister[openDetail]['.$count.']" class="textarea_w size9  detail" placeholder="Language/framework used" value=""> <a class="profile_cancel textarea_cross" href="javascript:void(0);" rel="'.CController::createUrl("/user/deleteRecord",array('id'=>$count,'case'=>'opensource')).'"></a>';
		}
		if($_REQUEST['case']=='reference'){
			$References	=	new References;
			$References->developer_id=	$profile->id;
            $References->name	=	'';
			$References->email	=	'';
			$References->linkedIn_profile_url	=	'';
			$References->save();
			$count	=	$References->id;
			echo '<input type="hidden" id="DeveloperRegister_reference_'.$count.'" name="DeveloperRegister[reference]['.$count.']" class="reference" value="'.$count.'">			<input type="text" id="DeveloperRegister_referenceName_'.$count.'" name="DeveloperRegister[referenceName]['.$count.']" class="textarea_w size9 " placeholder="Name" value="">            <input type="text" name="DeveloperRegister[referenceEmail]['.$count.']" id="referenceEmail_0" class="textarea_w size9 email unique" placeholder="Email Address" value="">            <input type="text" id="DeveloperRegister_referencePhone_'.$count.'" name="DeveloperRegister[referencePhone]['.$count.']" class="textarea_w size4 url" placeholder="LinkedIn Profile URL" value=""> <a class="profile_cancel textarea_cross" href="javascript:void(0);"  rel="'.CController::createUrl("/user/deleteRecord",array('id'=>$count,'case'=>'reference')).'"></a>';
		}
		
		
	}
	
	public function actionDeleteRecord(){
		$id	=	$_REQUEST['id'];
		if($_REQUEST['case']=='education'){
			DeveloperHasEducation::model()->deleteByPk($id);
		}
		if($_REQUEST['case']=='company'){
			DeveloperHasPreviousCompany::model()->deleteByPk($id);
		}
		if($_REQUEST['case']=='portfolio'){
			DeveloperHasProjects::model()->deleteByPk($id);
		}
		if($_REQUEST['case']=='opensource'){
			DeveloperHasOpenSource::model()->deleteByPk($id);
		}
		if($_REQUEST['case']=='reference'){
			References::model()->deleteByPk($id);
		}
	}
	public function actionJobs()
	{
		$key	=	'';
        //$criteria = new CDbCriteria();
        //if (!empty($_REQUEST['keywords'])) {
        //	$criteria->with = array('companyHasKeywords');
        //	$criteria->compare('companyHasKeywords.keywords_id', $_REQUEST['keywords'], true);
        //	$keywords = Keywords::model()->findByPk($_REQUEST['keywords']);
        //	$key	=	$keywords->name;
        //}
		$company = Company::model()->findAllByAttributes(array('status'=>1),array('order'=> 'name'));        
		if(isset(Yii::app()->user->developerId))
			$profile	=	Developer::model()->findByPk(Yii::app()->user->developerId);
		else
			$profile	=	new DeveloperRegister;
		$category	=	Category::model()->findAllByAttributes(array('status'=>1));
		$this->render('jobs',array('company'=>$company,'profile'=>$profile,'category'=>$category,'key'=>$key));
	}
	
	public function actionStatus()
	{
		$profile	=	Developer::model()->findByPk(Yii::app()->user->developerId);
		if(empty($profile)){
			$profile	=	new DeveloperRegister;
		}
		$CompanyHasDeveloper	= CompanyHasDeveloper::model()->findAllByAttributes(array('developer_id'=>Yii::app()->user->developerId));
		$this->render('status',array('companyHasDeveloper'=>$CompanyHasDeveloper,'profile'=>$profile));
	}
	
	public function actionChangePassword()
	{
		
		$changePassword		=	new ChangePassword;	
		if(isset($_POST['ChangePassword'])){
			
			$changePassword->attributes=$_POST['ChangePassword'];
			
			if($changePassword->validate())
			{
				$record		=	Users::model()->findByPk(Yii::app()->user->id);
				$password	=	$record->password;
				if($password	==	$_POST['ChangePassword']['current_password']){
					$record->password			=	$_POST['ChangePassword']['new_password'];
					$record->ConfirmPassword	=	$_POST['ChangePassword']['new_password'];
					if($record->save()){
						$record->unsetAttributes();
						$changePassword->unsetAttributes();
						Yii::app()->user->setFlash('success','Password changed successfully');
					}
					else
						Yii::app()->user->setFlash('error','New Password not saved');
				}
				else{
					//echo $password.'	==	'.$_POST['ChangePassword']['current_password'];die;
					Yii::app()->user->setFlash('error','Current Password is not valid');
				}
				
			}
		}			
		$this->render('changepassword',array('changePassword'=>$changePassword));
	}
	
	public function actionAutoComplete()
	{
		if (!empty($_GET['term'])) {
			if($_GET['action']=='school'){			
				$sql = "SELECT id ,name as label FROM schools Where name Like :qterm ";
				$sql .= ' ORDER BY name ASC';
			}
			elseif($_GET['action']=='degree'){			
				$sql = "SELECT id ,	name as label FROM degree Where name Like :qterm ";
				$sql .= ' ORDER BY name ASC';
			}
			elseif($_GET['action']=='subject'){			
				$sql = "SELECT id ,title as label FROM subject Where title Like :qterm ";
				$sql .= ' ORDER BY title ASC';
			}
			
			
			$command = Yii::app()->db->createCommand($sql);
			$qterm = $_GET['term'].'%';
			$command->bindParam(":qterm", $qterm, PDO::PARAM_STR);
			$result = $command->queryAll();
			echo CJSON::encode($result); exit;
		}else{
			return false;
		}
	}
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionInterested($company_id,$status)
	{
		$count	= CompanyHasDeveloper::model()->countByAttributes(array('developer_id'=>Yii::app()->user->developerId,'status_id'=>'1'));
		if($count >= 5 && $status == 1)
			echo '5';
		else{
			$model=CompanyHasDeveloper::model()->findByAttributes(array('company_id'=>$company_id,'developer_id'=>Yii::app()->user->developerId));
			if(empty($model))
				$model	=	new CompanyHasDeveloper;
			if($status	==	'1'){
				$model->company_id		=	$company_id;
				$model->developer_id	=	Yii::app()->user->developerId;
				$model->status_id		=	1;
				$model->timeslot_id		=	1;
				$model->schedule_date	=	date('Y-m-d');
				if($model->save())
					echo '1';
			}else{
				$model->delete();
				echo '2';
			}
		}
		die;
	}

	public function sendMail($data,$type)
	{
		switch($type){
			case 'references':
				$subject = 'You were Recommended to VenturePact';
				$body = $this->renderPartial('/mails/references_tpl',
										array('name' => $data['name'],'applicant' => $data['applicant']), true);
			break;
			case 'recommendation':
                $subject = 'VenturePact: '.$data['applicant'].' requests your recommendation';
				$body = $this->renderPartial('/mails/recommendation_tpl',
										array('id' => $data['id'],'name' => $data['name'],'applicant' => $data['applicant']), true);
			break;
            case 'application':
                $subject = 'VenturePact: '.$data['applicant'].' Application Received';
				$body = $this->renderPartial('/mails/application_tpl',
										array('name' => $data['name'],'applicant' => $data['applicant']), true);
			break;
		}
		
		$from		=	Yii::app()->params['adminEmail'];
		$to			=	$data['email'];
		$mail		=	Yii::app()->Smtpmail;
        $mail->ClearAllRecipients();
		$mail->SetFrom($from,'Venturepact');
        $mail->Subject	=	$subject;
        $mail->MsgHTML($body);
        $mail->AddAddress($to, "");		
        if(!$mail->Send()) {
            return true;
        }else {
			return false;
        }
	}
	
}