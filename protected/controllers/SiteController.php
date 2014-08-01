<?php
class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public $layout='//layouts/site';
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
		$this->render('index');
	}
    
    public function actionIndexDemo()
	{
		
		//New field added in developer profile
		$query=	'ALTER TABLE `hire` ADD `your_stack` VARCHAR( 100 ) NULL AFTER `phone` ;';
		$command = Yii::app()->db->createCommand($query)->query();
        CVarDumper::dump($command,10,1);
		die;
		
		
        $query     =   'ALTER TABLE `developer` ADD `about` TEXT NULL AFTER `phone` ;';
		$command = Yii::app()->db->createCommand($query)->query();
         CVarDumper::dump($command,10,1);
		//Queries for log report
		$query = 'ALTER TABLE `users` ADD `last_login` DATETIME NULL AFTER `linkedin_id` ;';
        $command = Yii::app()->db->createCommand($query)->query();
        CVarDumper::dump($command,10,1);
	    $query = 'ALTER TABLE `developer` ADD `modification_date` DATETIME NULL AFTER `add_date` ;';
        //$query='SHOW COLUMNS FROM jobs';
		$command = Yii::app()->db->createCommand($query)->query();
        //$rowCount=$command->execute(); 
        //$dataReader=$command->query();
        CVarDumper::dump($command,10,1);
		die('done');
		
        $this->render('index_demo');
	}
    
	public function actionForgotPassword()
	{
		$model=new ForgotpasswordForm;
		if(isset($_POST['ForgotpasswordForm'])){
			$model->attributes=$_POST['ForgotpasswordForm'];
			if($model->validate())
			{
				//Searches for the record in the database for the posted email 
				$record_exists = Users::model()->exists('username = :email', array(':email'=>$_POST['ForgotpasswordForm']['email']));
				if($record_exists==1){
					$record = Users::model()->findByAttributes(array('username'=>$_POST['ForgotpasswordForm']['email']));
					//Generates a random number
					//$random_number = $record->password;
					/*  Actual Code to be used  */
					$data['name']				=	$record->display_name;
					$data['email']				=	$record->username;
					$data['password']			=	base64_encode($record->username);
					$mail	=	$this->sendMail($data,'forget');
                   
					if($mail){
						/*$id = $record->id;
						$record->password			=	$random_number;
						$record->ConfirmPassword	=	$random_number;
						$record->save();*/
                        
                        
						Yii::app()->user->setFlash('success','You will receive an email with instructions<br/> about how to reset your password in a<br/> few minutes.');
						$this->refresh();
					}else{
						Yii::app()->user->setFlash('error',"Sorry mail could not be sent this time! Please try again.");
					}
				}
				else{
					Yii::app()->user->setFlash('error',"The details you provided do not match our records. Please provide the correct details!");
				}
			}//validate ends
		}
		$this->redirect(Yii::app()->createUrl('/site/login'));
	}
    
    public function actionResetPassword($link)
	{
        $email =    '';
        if(isset($link))
          $email = base64_decode($link);
        
       $record_exists = Users::model()->exists('username = :email', array(':email'=>$email));
       if($record_exists==1){
           Yii::app()->session['passwordEmail'] = $email;
           $this->redirect(Yii::app()->createUrl('/site/newPassword'));
       }
        else{
           Yii::app()->user->setFlash('error',"Invalid Url.");
           $this->redirect(Yii::app()->createUrl('/site/login'));
        }
        
	}
    public function actionActivation($link,$log)
	{
		$email =    '';
		if(isset($link)){
			$email = base64_decode($link);
			$log = base64_decode($log);
		}
		$record_exists = Users::model()->find('username = :email AND password = :pass', array(':email'=>$email,'pass'=>$log));
		
		if(!empty($record_exists)){
			$record_exists->status	=	1;
			$record_exists->ConfirmPassword	=	$record_exists->password;
			if(!$record_exists->save()){CVarDumper::dump($record_exists,10,1);die;}
			$model     =     new LoginForm;
			$model->username	=	$email;
			$model->password	=	$log;
			if($model->validate() && $model->login()){
				Yii::app()->user->setFlash('success','Your account email address has been verified.');
				$this->redirect(Yii::app()->createUrl('/user/profile',array('first'=>'1')));
			}
		}
		else{
			Yii::app()->user->setFlash('success','Your email address has no account with us.Please Register to get one.');
		}
		$this->redirect(Yii::app()->createUrl('/site/login'));
	}
    public function actionRecommendation()
    {
        $this->layout  = '//layouts/newLayout';
        $id = $_REQUEST['id'];
		if(isset($id))
			$model         =    Recommendations::model()->findByPk($id);
		else
			throw new CHttpException(404,'The specified recommendation cannot be found.');

		if(isset($_POST['Recommendations'])){
			$model->attributes=$_POST['Recommendations'];
			if($model->save())
            {
				Yii::app()->user->setFlash('RecommendationsSuccess','Your recommendation will be taken into account.');
				$this->redirect(Yii::app()->createUrl('/site'));
			}
		}
		$developer     =    Developer::model()->findByPk($model->developer_id);
        $this->render('recommendation',array('model'=>$model,'name'=>$developer->first_name));
    }
    public function actionNewPassword(){
        $this->layout = '//layouts/newLayout';
         if(!isset(Yii::app()->session['passwordEmail']))
           $this->redirect(Yii::app()->createUrl('/site/resetPassword'));
        
        $model     =    new NewpasswordForm;
		if(isset($_POST['NewpasswordForm'])){
			$model->attributes=$_POST['NewpasswordForm'];
			if($model->validate())
			{
				//Searches for the record in the database for the posted email 
				$record = Users::model()->findByAttributes(array('username'=>Yii::app()->session['passwordEmail']));
				$record->password            =    $model->new_password;	
                $record->ConfirmPassword     =    $model->confirm_password;
                if($record->save()){
					$login     =    new LoginForm;
                    $login->username     =  Yii::app()->session['passwordEmail']  ;
                    $login->password     =  $model->new_password ;
                        
                    if($login->validate() && $login->login()){
                        if(Yii::app()->user->role=='admin'){
                            Yii::app()->user->setFlash('success','Your new password has been sent to the email address you provided.');
	    			        unset(Yii::app()->session['passwordEmail']);
                            $this->redirect(array('admin/users'));
                        }else{
                            Yii::app()->user->setFlash('success','Your new password has been sent to the email address you provided.');
	    			        unset(Yii::app()->session['passwordEmail']);
                            $this->redirect(Yii::app()->createUrl('/user'));
                        }
                    }
                    
                    
                }
                else
                    die('error');
			}//validate ends
		}
        $this->render('newPassword',array('model'=>$model));
    }
	public function actionCompanies()
	{
		$model	=	new Hire;
		if(isset($_POST['Hire']))
		{
			$model->attributes	=	$_POST['Hire'];
			$model->add_date	=	date('Y-m-d');
			$model->status		=	1;
			if($model->save()){
				Yii::app()->user->setFlash('success','We will get in touch with you soon.');
				$this->refresh();
			}
		}
		$this->render('companies',array('model'=>$model));
	}
	public function actionAbout()
	{
		$this->render('about');
	}
	public function actionInvite()
	{
		$this->render('invite');
	}
	public function actionFaq()
	{
		$this->render('faq');
	}
	public function actionPrivacyTerms()
	{
		$this->render('privacyTerms');
	}
	
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		$this->layout  = '//layouts/newLayout';
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
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				@mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}
	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
        if(isset(Yii::app()->user->role))
			$this->redirect(array('/user'));
        
		$model	=	new LoginForm;
		$users	=	new Users;
		$forgot	=	new ForgotpasswordForm;
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login()){
				if(Yii::app()->user->role=='admin'){
					$this->redirect(array('admin/users'));
				}else{
					if(Yii::app()->user->returnUrl!='/index.php?r=user/jobs'){
						$this->redirect(Yii::app()->createUrl('/user'));
					}
					else{
						$this->redirect(Yii::app()->user->returnUrl);
					}
				
					
				}
			}else{
				Yii::app()->user->setFlash('loginError','login');
			}
				//$this->redirect(Yii::app()->user->returnUrl);
		}
		if(isset($_POST['Users']))
		{
			$users->attributes=$_POST['Users'];
			$users->status	=	1;
			$users->role	=	'user';
			
			if($users->save())
			{
				$profile	                =	new DeveloperRegister;
                $profile->first_name	    =	$users->display_name;
                $profile->alternative_email	=	$users->username;
                $profile->users_id		    =	$users->id;
                $profile->state_id		    =	1;
				$profile->status		    =	0;
                $profile->time_zone_id	    =	1;
                $profile->add_date		    =	date('Y-m-d H:i:s');
                $profile->save();
                
                $data['name']		=	$users->display_name;
				$data['email']		=	$users->username;
				$data['password']	=	$users->password;
				$this->sendMail($data,'register');
				$model->username	=	$users->username;
				$model->password	=	$users->password;
				if($model->validate() && $model->login()){					
                    $this->redirect(Yii::app()->createUrl('/user/profile',array('first'=>'1')));
				}
				else{
					Yii::app()->user->setFlash('contact','Thank you for contacting us.We will respond to you ASA possible.');
					$this->refresh();
				}
			}
			else{
				Yii::app()->user->setFlash('loginError','register');
			}
		}
		// display the login form
		
		$this->render('login',array('users'=>$users,'model'=>$model,'forgot'=>$forgot));
	}
	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionGetStarted($id=0)
	{
		$id	=	(isset($_REQUEST['id']))?$_REQUEST['id']:0;
		if(isset($id) && $id!=0)
			$users	=	ProjectRequests::model()->findByPk($id);
		else
        	$users	=	new ProjectRequests;
		if(isset($_POST['ProjectRequests']))
		{
			$users->attributes	=	$_POST['ProjectRequests'];
			$users->status		=	1;
			if(isset($_POST['ProjectRequests']['dead_line']) && !empty($_POST['ProjectRequests']['dead_line']))
				$users->dead_line	=	date('Y-m-d',strtotime($_POST['ProjectRequests']['dead_line']));
			
			$users->add_date	=	date('Y-m-d');
			if(isset($id) && $id!=0){
				foreach($_POST['ProjectRequests']['size_of_company'] as $dat=>$val){
					if($val!='0')
						$users->size_of_company	=	$val;
				}
			}
			if($users->save()){
				$this->sendMail($users,'request');
				
				if(isset($id) && $id!=0){
					Yii::app()->user->setFlash('saved',"Thank you for submitting your project's details. We'll get back to you very shortly regarding next steps.");
					$this->redirect(Yii::app()->createUrl('/site/getStarted'));
				}else
				{
					$this->redirect(Yii::app()->createUrl('/site/getStarted',array('id'=>$users->id)));
				}
			}
		}
		$this->render('getStarted',array('users'=>$users));
	}	
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
	function actionGetNames()
	{
	  if (!empty($_GET['term'])) {
		$sql = "SELECT id ,name as label,name FROM keywords where name Like :qterm";
		//$sql .= ' ORDER BY name ASC';
		$command = Yii::app()->db->createCommand($sql);
		$qterm = '%'.$_GET['term'].'%';
		$command->bindParam(":qterm", $qterm, PDO::PARAM_STR);
		$result = $command->queryAll();
		echo CJSON::encode($result); exit;
	  } else {
		return false;
	  }
	}

	public function actionDynamicCity(){
		if(isset($_REQUEST['Company']['country_id']))
			$countryId	=	$_REQUEST['Company']['country_id'];
		elseif(isset($_REQUEST['Developer']['country_id']))
			$countryId=$_REQUEST['Developer']['country_id'];
		elseif(isset($_REQUEST['Schools']['country_id']))
			$countryId	=	$_REQUEST['Schools']['country_id'];
		elseif(isset($_REQUEST['Investor']['country_id']))
			$countryId	=$_REQUEST['Investor']['country_id'];
		$cityList	= State::model()->findAllByAttributes(array('country_country_id'=>$countryId));
		foreach($cityList as $city)
		{
			echo CHtml::tag('option',array('value'=>$city->id),CHtml::encode($city->name),true);
		}
		
		die;
	}
	
	public function sendMail($data,$type)
	{
		switch($type){
			case 'contact':
				$subject = 'Contact Us';
				$body = $this->renderPartial('/mails/contact_tpl',
										array('name' => $data['name']), true);
			break;
			case 'forget':
				$subject = 'VenturePact: Forgot Password';
				$body = $this->renderPartial('/mails/forgot_tpl',
										array(	'name' => $data['name'],
												'email'=>$data['email'],
												'password'=>$data['password']), true);
			break;
			case 'register':
				$subject = 'Action Required - Verify Email Address';
				$body = $this->renderPartial('/mails/register_tpl',
										array(	'name' => $data['name'],
												'email'=>$data['email'],
                                                'link'=>base64_encode($data['email']),
												'password'=>base64_encode($data['password'])), true);
			break;
			case 'request':
				$subject = 'Project request application';
				$body = $this->renderPartial('/mails/request_tpl',
										array(	'data' => $data), true);
										
				$data['email']	=	Yii::app()->params['adminEmail'];
			break;
			
			default:
			break;			
		}
		$from		=	Yii::app()->params['adminEmail'];
		$to			=	$data['email'];
		$mail		=	Yii::app()->Smtpmail;
        $mail->SetFrom($from,'Venturepact');
        $mail->Subject	=	$subject;
        $mail->MsgHTML($body);
        $mail->AddAddress($to, "");		
        if(!$mail->Send()) {
            return 0;
        }else {
			return 1;
        }
	}
    
	
	public function ActionLinkedin(){
		
		$API_CONFIG = array(
			'appKey'       => '75anr5w4aijrvv',
			'appSecret'    => 'Aox4aWXcgWh1J3pk',
			'callbackUrl'  => $this->createAbsoluteUrl('/site/linkedinAfter')
			);
		$_REQUEST['lType'] = (isset($_REQUEST['lType'])) ? $_REQUEST['lType'] : '';
		switch($_REQUEST['lType']) {
			case 'initiate':
				$OBJ_linkedin = new LinkedIn($API_CONFIG);
				$_GET[LINKEDIN::_GET_RESPONSE] = (isset($_GET[LINKEDIN::_GET_RESPONSE])) ? $_GET[LINKEDIN::_GET_RESPONSE] : '';
				if(!$_GET[LINKEDIN::_GET_RESPONSE]) {
					$response = $OBJ_linkedin->retrieveTokenRequest();
					if($response['success'] === TRUE) {
						Yii::app()->session['oauth_request']	= $response['linkedin'];
						header('Location: ' . LINKEDIN::_URL_AUTH . $response['linkedin']['oauth_token']);
					} else {
						echo "Request token retrieval failed:<br /><br />RESPONSE:<br /><br /><pre>" . print_r($response, TRUE) . "</pre><br /><br />LINKEDIN OBJ:<br /><br /><pre>" . print_r($OBJ_linkedin, TRUE) . "</pre>";
					}
				}
				else{
					$response = $OBJ_linkedin->retrieveTokenAccess(Yii::app()->session['oauth_request']['oauth_token'],Yii::app()->session['oauth_request']['oauth_token_secret'], $_GET['oauth_verifier']);
					if($response['success'] === TRUE) {
						Yii::app()->session['oauth_access'] = $response['linkedin'];
						Yii::app()->session['oauth_authorized'] = TRUE;
						$this->redirect(Yii::app()->createUrl('linkedinAfter'));
					} else {
						echo "Access token retrieval failed:<br /><br />RESPONSE:<br /><br /><pre>" . print_r($response, TRUE) . "</pre><br /><br />LINKEDIN OBJ:<br /><br /><pre>" . print_r($OBJ_linkedin, TRUE) . "</pre>";
					}
				}
			break;
			case 'revoke':
				if(!oauth_session_exists()) {
					throw new LinkedInException('This script requires session support, which doesn\'t appear to be working correctly.');
				}
				$OBJ_linkedin = new LinkedIn($API_CONFIG);
				$OBJ_linkedin->setTokenAccess(Yii::app()->session['oauth_access']);
				$response = $OBJ_linkedin->revoke();
				if($response['success'] === TRUE) {
					session_unset();
					$_SESSION = array();
					if(session_destroy()) {
						header('Location: ' . $_SERVER['PHP_SELF']);
					} else {
						echo "Error clearing user's session";
					}
				} else {
					echo "Error revoking user's token:<br /><br />RESPONSE:<br /><br /><pre>" . print_r($response, TRUE) . "</pre><br /><br />LINKEDIN OBJ:<br /><br /><pre>" . print_r($OBJ_linkedin, TRUE) . "</pre>";
				}
			break;
			default:
				if(version_compare(PHP_VERSION, '5.0.0', '<')) {
					throw new LinkedInException('You must be running version 5.x or greater of PHP to use this library.'); 
				} 
				if(extension_loaded('curl')) {
					$curl_version = curl_version();
					$curl_version = $curl_version['version'];
				}else {
					throw new LinkedInException('You must load the cURL extension to use this library.'); 
				}
			break;
		}
	}	
	public function ActionLinkedinAfter(){
		$API_CONFIG = array(
			'appKey'       => '75anr5w4aijrvv',
			'appSecret'    => 'Aox4aWXcgWh1J3pk',
			'callbackUrl'  => $this->createAbsoluteUrl('/site/linkedinAfter')
			);			
		$OBJ_linkedin = new LinkedIn($API_CONFIG);
		$response = $OBJ_linkedin->retrieveTokenAccess(Yii::app()->session['oauth_request']['oauth_token'],Yii::app()->session['oauth_request']['oauth_token_secret'], $_GET['oauth_verifier']);
		if($response['success'] === TRUE) {
			Yii::app()->session['oauth_access'] = $response['linkedin'];
			Yii::app()->session['oauth_authorized'] = TRUE;
		}
		Yii::app()->session['oauth_authorized'] = (isset( Yii::app()->session['oauth_authorized']))? Yii::app()->session['oauth_authorized']: FALSE;
		if( Yii::app()->session['oauth_authorized'] === TRUE) {
			$OBJ_linkedin = new LinkedIn($API_CONFIG);
			$OBJ_linkedin->setTokenAccess(Yii::app()->session['oauth_access']);
			$OBJ_linkedin->setResponseFormat(LINKEDIN::_RESPONSE_XML);
			$response = $OBJ_linkedin->profile('~:(id,first-name,last-name,public-profile-url,email-address,picture-url,interests,phone-numbers,main-address,positions,skills,educations,network)');
			if($response['success'] === TRUE) {
				$response['linkedin'] = new SimpleXMLElement($response['linkedin']);
				$responseArray = (array) $response['linkedin'];
				$linkedinId		=	$responseArray['id'];
				$email			=	$responseArray['email-address'];
				$display_name	=	(isset($responseArray['first-name']))?$responseArray['first-name']:'';
				$profileUrl		=	(isset($responseArray['public-profile-url']))?$responseArray['public-profile-url']:'';
				$last_name		=	(isset($responseArray['last-name']))?$responseArray['last-name']:'';
				$education1		=	(array)$responseArray['educations'];
				if(!empty($education1['education']))
					$educations		=	$education1['education'];
				else	
					$educations		=	array();
				if(!empty($responseArray['positions']))
					$position1		=	(array)$responseArray['positions'];
				else
					$position1		=	array();
				
				if(!empty($position1) && !empty($position1['position']))
					$positions		=	$position1['position'];
				else	
					$positions		=	array();
				$record_exists	=	Users::model()->find('linkedin_id = :linkedinId and username = :username', array(':linkedinId'=>$linkedinId,':username'=>$email));
				if(!empty($record_exists)){
					$model     			=     new LoginForm;
					$model->username	=	$record_exists->username;
					$model->password	=	$record_exists->password;
					if($model->validate() && $model->login()){
						$this->redirect(Yii::app()->createUrl('/user/profile'));
					}
				}
				else{
					$users	=	Users::model()->findByAttributes(array('username'=>$email));
					if(empty($users)){
						$users	=	new Users;
						$users->username	=	$email;
						$password			=	time();
						$users->password	=	$password;
						$users->ConfirmPassword	=	$password;
						$users->status		=	1;
						$users->role		=	'user';
						$users->display_name=$display_name;
					}
					$users->linkedin_id		=	$linkedinId;
					$users->ConfirmPassword	=	$users->password;
					$users->linkedin_id		=	$linkedinId;
					if($users->save())
					{
						$profile	=	DeveloperRegister::model()->find('users_id = :userId', array(':userId'=>$users->id));
						if(empty($profile)){
							$profile	                =	new DeveloperRegister;
							$profile->first_name	    =	$display_name;
							$profile->last_name			=	$last_name;
							$profile->alternative_email	=	$email;
							$profile->users_id		    =	$users->id;
							$profile->state_id		    =	1;
							$profile->time_zone_id	    =	1;
							$profile->status			=	0;
							$profile->add_date		    =	date('Y-m-d H:i:s');
							$profile->save();
						}
						
						if(array_key_exists('0',$educations))
						foreach($educations as $education){
							$education	= (array)$education;
							$school		=	(isset($education['school-name']))?$education['school-name']:'';
							$degree		=	(isset($education['degree']))?$education['degree']:'';
							$subject	=	(isset($education['field-of-study']))?$education['field-of-study']:'';
							$schools	=	Schools::model()->findByAttributes(array('name'=>$school));
							if(empty($schools)){
								$schools	= new Schools;
								$schools->description	=	'Added By WebSite User';
								$schools->name		=	$school;
								$schools->state_id	=	1;
								$schools->status	=	1;
							}
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
								$Subjects->title	=	$subject;
								$Subjects->status	=	1;
							}
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
						else{
							$education	= (array)$educations;
							$school		=	(isset($education['school-name']))?$education['school-name']:'';
							$degree		=	(isset($education['degree']))?$education['degree']:'';
							$subject	=	(isset($education['field-of-study']))?$education['field-of-study']:'';
							$schools	=	Schools::model()->findByAttributes(array('name'=>$school));
							if(empty($schools)){
								$schools	= new Schools;
								$schools->description	=	'Added By WebSite User';
								$schools->name		=	$school;
								$schools->state_id	=	1;
								$schools->status	=	1;
							}
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
								$Subjects->title	=	$subject;
								$Subjects->status	=	1;
							}
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
						
						if(array_key_exists('0',$positions))
						foreach($positions as $position){
							$position		= (array)$position;	
							$role			=	(isset($position['title']))?$position['title']:'';
							$start_date		=	(isset($position['start-date']))?$position['start-date']:'';
							if(isset($position['start-date'])){
								$startDate	=	(array)$position['start-date'];
								$month	=	(isset($startDate['month']))?$startDate['month']:'01';
								$year	=	(isset($startDate['year']))?$startDate['year']:date('Y');
								$start_date	=	$year.'-'.$month.'-01';
							}
							else
								$start_date	=	'';

							if($position['is-current'])
								$end_date	=	date('Y-m-d');
							else{
								if(isset($position['end-date'])){
									$endDate	=	(array)$position['end-date'];
									$month	=	(isset($endDate['month']))?$endDate['month']:'01';
									$year	=	(isset($endDate['year']))?$endDate['year']:date('Y');
									$end_date	=	$year.'-'.$month.'-01';
								}
								else
									$end_date	=	'';
							}
							
								
							$company		=	(isset($position['company']->name))?$position['company']->name:'';
							$summary		=	(isset($position['summary']))?$position['summary']:'';
							$description	=	(isset($position['company']->size))?$position['company']->size:'';
							$description	.=	(isset($position['company']->type))?' '.$position['company']->type:'';
							$description	.=	(isset($position['company']->industry))?' '.$position['company']->industry:'';
							$companys	=	PreviousCompany::model()->findByAttributes(array('name'=>$company));
							if(empty($companys)){
								$companys	= new PreviousCompany;
								$companys->description	=	'Added By LinkedIn User '.$description;
								$companys->name		=	$company;
								$companys->status	=	1;
								$companys->save();
							}
							$DeveloperHasPreviousCompany	= DeveloperHasPreviousCompany::model()->findByPk($companys->id);
							if(empty($DeveloperHasPreviousCompany))
								$DeveloperHasPreviousCompany	=	new DeveloperHasPreviousCompany;
							$DeveloperHasPreviousCompany->previous_company_id	=	(isset($companys->id))?$companys->id:'';
							$DeveloperHasPreviousCompany->developer_id			=	$profile->id;
							$DeveloperHasPreviousCompany->role					=	$role;
							$DeveloperHasPreviousCompany->start_time			=	date('Y-m-d',strtotime($start_date));
							$DeveloperHasPreviousCompany->end_time				=	date('Y-m-d',strtotime($end_date));
							$DeveloperHasPreviousCompany->link					=	'';
							$DeveloperHasPreviousCompany->description			=	$summary;
							if(!empty($companys->id)||!empty($_POST['DeveloperRegister']['link'][$key])||!empty($_POST['DeveloperRegister']['start_time'][$key])||!empty($_POST['DeveloperRegister']['end_time'][$key])||!empty($_POST['DeveloperRegister']['role'][$key])||!empty($_POST['DeveloperRegister']['description'][$key]))
								$DeveloperHasPreviousCompany->save();
						}
						else{
							
							$position		= (array)$positions;	
							$role			=	(isset($position['title']))?$position['title']:'';
							$start_date		=	(isset($position['start-date']))?$position['start-date']:'';
							if(isset($position['start-date'])){
								$startDate	=	(array)$position['start-date'];
								$month	=	(isset($startDate['month']))?$startDate['month']:'01';
								$year	=	(isset($startDate['year']))?$startDate['year']:date('Y');
								$start_date	=	$year.'-'.$month.'-01';
							}
							else
								$start_date	=	'';
							if(isset($position['is-current']))
								$end_date	=	date('Y-m-d');
							else{
								if(isset($position['end-date'])){
									$endDate	=	(array)$position['end-date'];
									$month	=	(isset($endDate['month']))?$endDate['month']:'01';
									$year	=	(isset($endDate['year']))?$endDate['year']:date('Y');
									$end_date	=	$year.'-'.$month.'-01';
								}
								else
									$end_date	=	'';
							}
							$company		=	(isset($position['company']->name))?$position['company']->name:'';
							$summary		=	(isset($position['summary']))?$position['summary']:'';
							
							
							$description	=	(isset($position['company']->size))?$position['company']->size:'';
							$description	.=	(isset($position['company']->type))?' '.$position['company']->type:'';
							$description	.=	(isset($position['company']->industry))?' '.$position['company']->industry:'';
							
							
							
							
							
							$companys	=	PreviousCompany::model()->findByAttributes(array('name'=>$company));
							if(empty($companys)){
								$companys	= new PreviousCompany;
								$companys->description	=	'Added By LinkedIn User '.$description;
								$companys->name		=	$company;
								$companys->status	=	1;
								$companys->save();
							}
							$DeveloperHasPreviousCompany	= DeveloperHasPreviousCompany::model()->findByPk($companys->id);
							if(empty($DeveloperHasPreviousCompany))
								$DeveloperHasPreviousCompany	=	new DeveloperHasPreviousCompany;
							$DeveloperHasPreviousCompany->previous_company_id	=	(isset($companys->id))?$companys->id:'';
							$DeveloperHasPreviousCompany->developer_id			=	$profile->id;
							$DeveloperHasPreviousCompany->role			=	$role;
							$DeveloperHasPreviousCompany->start_time	=	date('Y-m-d',strtotime($start_date));
							$DeveloperHasPreviousCompany->end_time		=	date('Y-m-d',strtotime($end_date));
							$DeveloperHasPreviousCompany->link			=	'';
							$DeveloperHasPreviousCompany->description	=	$summary;
							 if(!empty($companys->id)||!empty($start_time)||!empty($end_date)||!empty($role)||!empty($description)) 
								$DeveloperHasPreviousCompany->save();
						}
						
						if(isset($profileUrl)){
							$accounts	=	Accounts::model()->findByAttributes(array('name'=>'linkedIn','developer_id'=>$profile->id));
							if(empty($accounts)){
								$accounts			=	new Accounts;
								$accounts->name		=	'linkedIn';
								$accounts->add_date	=	date('Y-m-d H:i:s');
							}
							$accounts->link			=	$profileUrl;
							$accounts->developer_id	=	$profile->id;
							$accounts->status		=	1;
							$accounts->save();
						}
						$record_exists	=	Users::model()->find('linkedin_id = :linkedinId or username = :username', array(':linkedinId'=>$linkedinId,':username'=>$email));
						$model     =     new LoginForm;
						$model->username	=	$record_exists->username;
						$model->password	=	$record_exists->password;
                        if($model->login()){
							$data['name']		=	$users->display_name;
							$data['email']		=	$users->username;
							$data['password']	=	$users->password;
							$this->sendMail($data,'register');
							$this->redirect(Yii::app()->createUrl('/user/profile',array('first'=>'1')));
                        }
                        else{
							Yii::app()->user->setFlash('error','Unable to connect linked in profile.');
                            $this->redirect(Yii::app()->createUrl('/site/login'));
                        }
                    }
					else{
							Yii::app()->user->setFlash('error','Unable to connect linked in profile.');
                            $this->redirect(Yii::app()->createUrl('/site/login'));
                        }
                }
			}
			else{
				Yii::app()->user->setFlash('error',"Error retrieving profile information:<br />RESPONSE:<br /><pre>".print_r($response)."</pre>");
				$this->redirect(Yii::app()->createUrl('/site/login'));
			}
		}
	die('Done');
    }// end
	
	
	
	
}