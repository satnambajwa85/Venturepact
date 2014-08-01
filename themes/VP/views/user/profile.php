<!-- content outer  -->
<div class="dashprofile_content">
    <div class="dashprofile_content_inner">
        <div class="dashprofile_content_inner_main">
            <!-- dashpro left start-->
            <div class="dashpro_left">
                <div class="dashpro_left_box active" id="step1" data-step="1" data-intro="Submit your profile here. Once submitted, we will evaluate your request for invite." data-position="right">
                    <div class="dashpro_left_box_main">
                        <div class="dashpro_img">
                            <?php echo CHtml::link('<img src="'.Yii::app()->theme->baseUrl.'/images/dashboard_profile1.png" alt="edit profile" border="0" />',array('/user')); ?>                            
                        </div>
                        <div class="dashpro_title">Profile</div>
                    </div>
                    <div class="dashpro_edit">
                    <?php echo CHtml::link('<img src="'.Yii::app()->theme->baseUrl.'/images/icon_dashprofile-edit.png" alt="edit profile" border="0" title="Change Password" />',array('/user/changePassword')); ?>
                    </div>
                </div>
                <div class="dashpro_left_box border_b" id="step2" data-step="2" data-intro="Once you submit your profile, you can apply to 5 startups that interest you the most. You can edit/add/delete anytime." data-position="right">
                    <div class="dashpro_left_box_main">
                        <div class="dashpro_img">
                            <?php echo CHtml::link('<img src="'.Yii::app()->theme->baseUrl.'/images/a1.png" alt="jobs" border="0" />',array('/user/jobs')); ?>
                        </div>
                        <div class="dashpro_title">Browse Jobs</div>
                    </div>
                </div>
                 <div class="dashpro_left_box" id="step3" data-step="3" data-intro="Once your invite request is approved, your application will be forwarded to your preferred startups. You can track all of your applications here." data-position="right">
                    <div class="dashpro_left_box_main">
                        <div class="dashpro_img">
                            <?php echo CHtml::link('<img src="'.Yii::app()->theme->baseUrl.'/images/a3.png" alt="jobs" border="0" />',array('/user/status')); ?>
                        </div>
                        <div class="dashpro_title">Track status</div>
                    </div>
                </div>
            </div>
            <!-- dashpro left end -->
            
            <!-- dashpro right start -->
            <div class="dashpro_right">
	    <div id="navigation">
                    	<ul><li class="1 selected"><a href="#" class="contact_icon"></a></li>
                        	<li class="2"><a href="#" class="edu_icon"></a></li>
                            <li class="3"><a href="#" class="portfolio_icon"></a></li>
                            <li class="4"><a href="#" class="skills_icon"></a></li>
                            <li class="5"><a href="#" class="qa_icon"></a></li></ul>
	    </div>
                    

                <!-- dashpro right-form start -->
                <div class="dashpro_right_form">
                        	<!-- dashpro left end -->
                    <div id="form_slide">
                            <div id="steps">
				
                            <?php $form=$this->beginWidget('CActiveForm', array('id'=>'developer-form','enableAjaxValidation'=>false,)); ?>
			    
                            <fieldset class="step" id="pp-step-1" >
                            
                        
                                 
                                <div class="step1" >
                                	<div class="head_text_large">Contact Information</div>
<?php echo $form->textField($profile,'first_name',array('placeholder'=>"Firstname",  'class'=>"textarea required")); ?>
<?php echo $form->textField($profile,'last_name',array('placeholder'=>"Lastname",  'class'=>"textarea required")); ?>
<?php echo $form->hiddenField($profile,'alternative_email',array('placeholder'=>"Email Address",  'class'=>"textarea","readonly"=>"readonly")); ?>
<?php echo $form->textField($profile,'skype_name',array('placeholder'=>"Skype Name",  'class'=>"textarea required")); ?>
<?php echo $form->textField($profile,'phone',array('placeholder'=>"Phone",  'class'=>"textarea required phone")); ?>
<?php echo $form->textField($profile,'address1',array('placeholder'=>"City, Country", 'class'=>"textarea required")); ?>
                                    <div class="row_outer">	
                                        <div class="red_butt">
                                            <a href="#" class="next" rel="1" id="p-step1">Next</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonials_first">
                                    <span><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/col1.png"></span>
                                    <p>
                                    Sitting in India, I work with a really cool US based startup called FireFly. I work directly with the founders, Dan Shipper and Justin Meltzer, who are exceptional engineers and entrepreneurs. I get to work on really cutting edge javascript and Node code - something very few companies in the world can offer. </p>
                                    <span style="float: right;"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/col2.png"></span>
                                    
                                    <h3>Tarun</h3>
                                    <h4>Node Developer @ Firefly</h4>
                                </div>
                                
                           
                            </fieldset>
                            <fieldset class="step" id="pp-step-2" >
                            	<div class="step2">
                                	<div  class="head_text_large center_position">Education</div>
                                    <div class="gray_outer">
                                        <div class="container_outer">
										  <?php $count=0;
                                                if(!empty($profile->educations))
                                                foreach($profile->educations as $key=>$educations){
                                                    $req =    ($count==0)?'required':'';?>
                                                    <div class="row_outer">
                            <?php echo $form->hiddenField($profile,'educations['.$educations.']',array('value'=>(isset($educations))?$educations:'')); ?>
                            <?php echo $form->textField($profile,'school['.$educations.']',array('value'=>(isset($profile->school[$key]))?$profile->school[$key]:'','placeholder'=>"Enter your school",  'class'=>"textarea_w ".$req.' size3')); ?>
                            <?php echo $form->textField($profile,'degree['.$educations.']',array('value'=>(isset($profile->degree[$key]))?$profile->degree[$key]:'','placeholder'=>"Enter your degree",  'class'=>"textarea_w ".$req.' size3')); ?>
                            <?php echo $form->textField($profile,'subject['.$educations.']',array('value'=>(isset($profile->subject[$key]))?$profile->subject[$key]:'','placeholder'=>"Enter your subject",  'class'=>"textarea_w ".$req.' size4')); 
                            if($count>1){?>
                            <a class="profile_cancel textarea_cross" href="javascript:void(0);" rel="<?php echo CController::createUrl("/user/deleteRecord",array('id'=>$educations,'case'=>'education'))?>"></a>
                            <?php } ?>
                                                    </div>
                                                    <?php $count++;}?>
                                                     <div class="dynamic_row hide">
                                                        <div class="row_outer_edu">
                                                        <input type="hidden" name="educationRecords" id="educationRecords" value="<?php echo $count?>" class="counter" />
                                                        </div>
                                                    </div>
                                                </div>
                                          <div class="row_outer">	
                    	<div id="eduajaxLoader" class="ajaxLoader"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ajaxloaderr.gif" alt="loading" /></div>
				    	<div class=""><a class="add_outer_neww" href="javascript:void(0);" id="add_link_edu">ADD +</a>
                       </div>
                    </div>      
                                                
                                    </div>
                                    <div class="head_text_large center_position">Employment</div>
                                    <div class="gray_outer">
                        <div class="container_outer">
					<?php 
					$count=0;
					if(!empty($profile->previous))
						foreach($profile->previous as $key=>$previous){?>
                        <div class="row_outer_new">
                                <div class="inner_left ">
    <?php echo $form->hiddenField($profile,'previous['.$count.']',array('value'=>(isset($previous))?$previous:'','class'=>"textarea_w")); ?>
	<?php echo $form->textField($profile,'company['.$count.']',array('value'=>(isset($profile->company[$key]))?$profile->company[$key]:'','placeholder'=>"Company",  'class'=>"textarea_w")); ?>
    <?php echo $form->textField($profile,'role['.$count.']',array('value'=>(isset($profile->role[$key]))?$profile->role[$key]:'','placeholder'=>"Role",  'class'=>"textarea_w")); ?>
    <?php echo $form->textField($profile,'start_time['.$count.']',array('value'=>(isset($profile->start_time[$key]))?$profile->start_time[$key]:'','placeholder'=>"From",'class'=>"textarea size7 date from",'title'=>'YYYY-MM-DD')); ?>
    <?php echo $form->textField($profile,'end_time['.$count.']',array('value'=>(isset($profile->end_time[$key]))?$profile->end_time[$key]:'','placeholder'=>"Till",'class'=>"textarea size8 date to",'title'=>'YYYY-MM-DD')); ?>
                                </div>
                                <div class="inner_right">
    
    <?php echo $form->textArea($profile,'description['.$count.']',array('value'=>(isset($profile->description[$key]))?$profile->description[$key]:'','placeholder'=>"What did you work on?", 'class'=>"textarea_w",'rows'=>"5" )); ?>
                                </div>
<?php if($count>0){?>
<a class="profile_cancel textarea_cross" href="javascript:void(0);" rel="<?php echo CController::createUrl("/user/deleteRecord",array('id'=>$previous,'case'=>'company'))?>"></a>
<?php } ?>
                        </div>
                        <?php $count++;}
						for($count;$count<1;$count++){?>
                        
                        <div class="row_outer_new">
                                <div class="inner_left ">
	<?php echo $form->hiddenField($profile,'previous['.$count.']',array('value'=>'','class'=>"textarea_w")); ?>
	<?php echo $form->textField($profile,'company['.$count.']',array('value'=>'','placeholder'=>"Company",  'class'=>"textarea_w")); ?>
	<?php echo $form->textField($profile,'role['.$count.']',array('value'=>'','placeholder'=>"Role",  'class'=>"textarea_w")); ?>
	<?php echo $form->textField($profile,'start_time['.$count.']',array('value'=>'','placeholder'=>"From",'class'=>"textarea size7 date from",'title'=>'YYYY-MM-DD')); ?>
	<?php echo $form->textField($profile,'end_time['.$count.']',array('value'=>'','placeholder'=>"Till",'class'=>"textarea size8 date to",'title'=>'YYYY-MM-DD')); ?>
                                </div>
                                <div class="inner_right">
   
    <?php echo $form->textArea($profile,'description['.$count.']',array('value'=>'','placeholder'=>"What did you work on?", 'class'=>"textarea_w",'rows'=>"5" )); ?>
                                </div>
                        </div>
                        
                        <?php $count++;} ?>
                        
                        
                         <div class="dynamic_row hide">
                           <div class="row_outer_new">
                                <div class="inner_left ">
	<input type="hidden" name="companyRecords" id="companyRecords" value="<?php echo $count?>" class="counter" />
   
                                </div>
                          </div>
                          <a class="profile_cancel" href="javascript:void(0);"></a>
                        </div>
                        </div>
                        <div class="row_outer">	
                        	<div id="compajaxLoader" class="ajaxLoader"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ajaxloaderr.gif" alt="loading" /></div>
				    	
                                   <div>
                                     <a class="add_outer_neww" href="javascript:void(0);" id="add_link_comp">ADD +</a>
                                   </div>
                        </div>
                    </div>   
                    				<div class="row_outer">	
                                        <div class="red_butt">
                                             <a href="#" class="next" rel="2">Save & Next</a>                                            
                                        </div>
                                    </div> 
                                </div>
                           
                            </fieldset>
                            <fieldset class="step form_scroller" id="pp-step-3" >
                           
                                 
								<?php if(count($skillCategory)>0){?>
                                     <div class="step5">
                                     	<div id="s3" class="head_text_large center_position">Self Skills Assessment</div>  
                                        <div class="gray_outer_skill">
                                                    <div class="skill_head_outer">
                                                      <div class="skill_top_head_top">
                                                        <div class="skill_text_outer">Aware</div>
                                                        <div class="skill_text_outer1">Studied</div>
                                                        <div class="skill_text_outer2">Experienced</div>
                                                        <div class="skill_text_outer3">Pretty Good</div>
                                                        <div class="skill_text_outer4 right_b">Guru</div> 
                                                      </div>
                                                        
                                                    </div>
                                            <?php foreach($skillCategory as $Skills){ ?>
                                                <div>
                                                    <div class="skill_main_outer">
                                                        
        <?php if(!empty($profile->skill[$Skills->title.'_'.$Skills->id])){
            $count=	0;
            foreach($profile->skill[$Skills->title.'_'.$Skills->id] as $key=>$val){
                if($key==0){
        ?>
        
        <div class="skill_row_outer">
                                                            <div class="skill_left_outer">
                                                                <div class="lable_text"><?php echo $Skills->title;?> :</div>
                                                                <div class="skilltext_area">
                                                                     <?php echo $form->textField($profile,'skill['.$Skills->title.'_'.$Skills->id.']['.$key.']',array('value'=>$val,'placeholder'=>$Skills->description,  'class'=>"textarea_skill")); ?>
                                                                </div>
                                                            </div>
                                                            <div class="skill_top_head">
                                                                <?php $valueRating = array('1'=>'', '2'=>'', '3'=>'', '4'=>'', '5'=>'');
                                                                echo $form->radioButtonList($profile,'rating['.$Skills->title.'_'.$Skills->id.']['.$key.']',$valueRating,array('separator'=>' ','labelOptions'=>array('class'=>'textarea_skill'), ));?>
                                                            </div>
                                                        </div>
        <?php
        }else{?>
        <div class="">
            <div class="skill_row_outer">
                <div class="skill_left_outer">
                    <div class="lable_text"></div>
                    <div class="skilltext_area">
                        <?php echo $form->textField($profile,'skill['.$Skills->title.'_'.$Skills->id.']['.$key.']',array('value'=>$val,'placeholder'=>$Skills->description,  'class'=>"textarea_skill")); ?>
                    </div>
                </div>
                <div class="skill_top_head">
                    <?php  echo $form->radioButtonList($profile,'rating['.$Skills->title.'_'.$Skills->id.']['.$key.']',$valueRating,array('separator'=>' ','labelOptions'=>array('class'=>'textarea_skill'), ));?>
                </div>
            </div>
            <?php if($count>1){?>
            <a class="profile_cancel1" href="javascript:void(0);"></a>
            <?php } ?>
        </div>
        
        <?php 
                }
                $count++;
            }
            for($count;$count<2;$count++){
            ?>
            <div class="skill_row_outer">
                <div class="skill_left_outer">
                    <div class="lable_text"></div>
                    <div class="skilltext_area">
                        <?php echo $form->textField($profile,'skill['.$Skills->title.'_'.$Skills->id.'][0_'.$Skills->id.']',array('placeholder'=>$Skills->description,  'class'=>"textarea_skill")); ?>
                    </div>
                </div>
                <div class="skill_top_head">
                    <?php  echo $form->radioButtonList($profile,'rating['.$Skills->title.'_'.$Skills->id.'][0_'.$Skills->id.']',$valueRating,array('separator'=>' ','labelOptions'=>array('class'=>'textarea_skill'), ));?>
                </div>
            </div>
        <?php }
        }else{ ?>
            <div class="skill_row_outer">
                <div class="skill_left_outer">
                    <div class="lable_text"><?php echo $Skills->title;?> :</div>
                    <div class="skilltext_area">
                         <?php echo $form->textField($profile,'skill['.$Skills->title.'_'.$Skills->id.'][0]',array('placeholder'=>$Skills->description,  'class'=>"textarea_skill")); ?>
                    </div>
                </div>
                <div class="skill_top_head">
                    <?php $valueRating = array('1'=>'', '2'=>'', '3'=>'', '4'=>'', '5'=>'');
                    echo $form->radioButtonList($profile,'rating['.$Skills->title.'_'.$Skills->id.'][0]',$valueRating,array('separator'=>' ','labelOptions'=>array('class'=>'textarea_skill'), ));?>
                </div>
            </div>
        
        
            <div class="skill_row_outer">
                <div class="skill_left_outer">
                    <div class="lable_text"></div>
                    <div class="skilltext_area">
                        <?php echo $form->textField($profile,'skill['.$Skills->title.'_'.$Skills->id.'][1]',array('placeholder'=>$Skills->description,  'class'=>"textarea_skill")); ?>
                    </div>
                </div>
                <div class="skill_top_head">
                    <?php  echo $form->radioButtonList($profile,'rating['.$Skills->title.'_'.$Skills->id.'][1]',$valueRating,array('separator'=>' ','labelOptions'=>array('class'=>'textarea_skill'), ));?>
                </div>
            </div>
        <?php } ?>
        
        <div class="dynamic_row hide">
            <div class="skill_row_outer">
                <div class="skill_left_outer">
                    <div class="lable_text"></div>
                    <div class="skilltext_area">
                        <?php echo $form->textField($profile,'skill['.$Skills->title.'_'.$Skills->id.'][1_'.$Skills->id.']',array('placeholder'=>$Skills->description,  'class'=>"textarea_skill")); ?>
                    </div>
                </div>
                <div class="skill_top_head">
                    <?php  echo $form->radioButtonList($profile,'rating['.$Skills->title.'_'.$Skills->id.'][1_'.$Skills->id.']',$valueRating,array('separator'=>' ','labelOptions'=>array('class'=>'textarea_skill'), ));?>
                </div>
            </div>
        <a class="profile_cancel1" href="javascript:void(0);"></a>
        </div>
        
        
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <a href="javascript:void(0);" class="add_outer">ADD +</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                         </div> 
                                         <div class="row_outer">	
                                <div class="red_butt">
                                     <a href="#" class="next" rel="3">Save & Next</a>
                                </div>
                            </div>            
                                     </div>
                                 <?php } ?>
                            
                            </fieldset>
                            <fieldset class="step" id="pp-step-4" >
                            	<div class="step6">
                                <div id="s3" class="head_text_large center_position">Portfolio & OS Contribution</div>  
                        	<p>
                                We would love to know more about the products you have built and/or the projects you have worked on as a part of a team.
                            </p>
                            <div class="gray_outer inner_gary">
         
            
            
            <div class="container_outer"> 
            	<div class="portfolio_social_buttons_outr">
                	<?php if(!empty($profile->gitHub)){?>
                     <a id="gitLink" class="portfolio_social_buttons" href="<?php echo $profile->gitHub?>" target="_blank">
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/icon_git.png">
						<div class="social_text" id="gitText">Connected</div>
					</a>
					<?php }else{ ?>
                    <a id="gitLink" class="portfolio_social_buttons popup" href="javascript:void(0)" target="">
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/icon_git.png">
						<div class="social_text" id="gitText">Link Github</div>
					</a>
                    <?php } ?>
                    <?php echo $form->hiddenField($profile,'gitHub',array('placeholder'=>"GitHub profile",'id'=>'gitHubURL',  'class'=>"textarea url")); ?>
                </div>
                <div class="login_or_inner"><div class="login_or_border"></div><span>or enter manually </span></div>
<?php $count=0;
	if(!empty($profile->portfolio))
	foreach($profile->portfolio as $key=>$portfolio){
         $req =    ($count==0)?'required':'';?>
            
                <div class="row_outer ineerineer">
    				<?php echo $form->hiddenField($profile,'portfolio['.$count.']',array('value'=>(isset($portfolio))?$portfolio:'','class'=>"portfolio"));?>
    				<?php echo $form->textField($profile,'url['.$count.']',array('value'=>(isset($profile->url[$key]))?$profile->url[$key]:'','placeholder'=>"URL",'class'=>"textarea_w url ". $req.' size9'));?>
                    <?php echo $form->textField($profile,'project['.$count.']',array('value'=>(isset($profile->project[$key]))?$profile->project[$key]:'','placeholder'=>"Description",'class'=>"project textarea_w ". $req.' size9'));?>
    				<?php echo $form->textField($profile,'language['.$count.']',array('value'=>(isset($profile->language[$key]))?$profile->language[$key]:'','placeholder'=>"Language/framework used",'class'=>"language textarea_w ". $req.' size4'));?>
                    
<?php if($count>1){?>
<a class="profile_cancel textarea_cross" href="javascript:void(0);" rel="<?php echo CController::createUrl("/user/deleteRecord",array('id'=>$portfolio,'case'=>'portfolio'))?>"></a>
<?php } ?>
				</div>
<?php $count++;} ?>

<div class="dynamic_row hide">
    <div class="row_outer textarea_box">
    	<input type="hidden" name="companyRecords" id="portfolioRecords" value="<?php echo $count?>" class="counter" />    	
	</div>
    <a class="profile_cancel textarea_cross" href="javascript:void(0);"></a>
</div>
            </div>
            
            
             <div class="row_outer">	
             		<div id="portfolioajaxLoader" class="ajaxLoader"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ajaxloaderr.gif" alt="loading" /></div>
				    <div>
                         <a class="add_outer_neww" href="javascript:void(0);" id="add_portfolio_link">ADD +</a>
                       </div>
             </div>
             
             
            </div>   
                            <div class="row_outer">	
                                <div class="red_butt">
                                    <a href="#" class="next" rel="4">Save & Next</a>
                                </div>
                            </div> 
                        </div>
                            </fieldset>
                            <fieldset class="step" id="pp-step-5" >
                            	<div class="step6">
                        	<div class="gray_outer">
                            <div class="video_heading">
                            	<h3>Video Question</h3>
                                <p>Tell us about one project you undertook that completely failed. Why did it fail? What did you learn from it?  </p>
                            </div>
                            <div class="video_code">
                            <input type="hidden" id="title" type="text" value="<?php echo $profile->id;?>">
                            <div id="widget" style="width:325px;height:250px"></div>
                            <div id="player"></div>
                            </div>
                            <div class="video_right">
                            	<p class="video_right_or">or</p>
                                <?php echo $form->textField($profile,'question[1]',array('id'=>"youTubeURL",'class'=>'required url youtube_url','placeholder'=>"Enter youtube URL"));?>
            				</div>
            
             
            </div>
           					 <div id="s3" class="head_text_large center_position">Referrals</div> 	
                            <div class="gray_outer">
                            <p>
                               Tell us about at least 2 of your friends or colleagues who you think would be a good fit for VenturePact. You will remain anonymous. 
                            </p>
                            <p style="color:#2CCAFD;">If they are hired by a VenturePact company, you will receive 10% of their first paycheck. </p>
            <div class="container_outer">
<?php 

$count	=	0;
	if($profile->reference)
	foreach($profile->reference as $key=>$ref){
		$req =    ($count<2)?'required':'';?>
								<div class="row_outer">	
									<div class="row_outer">
			<?php echo $form->hiddenField($profile,'reference['.$ref.']',array('value'=>(isset($ref))?$ref:'','class'=>"reference"));?>
			<?php echo $form->textField($profile,'referenceName['.$ref.']',array('value'=>(isset($profile->referenceName[$key]))?$profile->referenceName[$key]:'','placeholder'=>"Name",'class'=>"textarea_w size9 ".$req));?>
            <?php echo $form->textField($profile,'referenceEmail['.$ref.']',array('value'=>(isset($profile->referenceEmail[$key]))?$profile->referenceEmail[$key]:'','placeholder'=>"Email Address",'class'=>"textarea_w size9 ".$req." email unique" ,'id'=>'referenceEmail_'.$count));?>
            <?php echo $form->textField($profile,'referencePhone['.$ref.']',array('value'=>(isset($profile->referencePhone[$key]))?$profile->referencePhone[$key]:'','placeholder'=>"LinkedIn Profile URL",'class'=>"textarea_w size4  ".$req." url"));?>
<?php if($count>1){?>
<a class="profile_cancel textarea_cross" href="javascript:void(0);" rel="<?php echo CController::createUrl("/user/deleteRecord",array('id'=>$ref,'case'=>'reference'))?>"></a>
<?php } ?>
									</div>
								</div>
<?php $count++;}?>
			<div class="dynamic_row hide">
            	<div class="row_outer textarea_box">
             	<input type="hidden" name="companyRecords" id="referenceRecords" value="<?php echo $count?>" class="counter" />
             </div>
             <a class="profile_cancel textarea_cross" href="javascript:void(0);"></a>
		</div>
                                </div>
            
             <div class="row_outer">
				<div id="referenceajaxLoader" class="ajaxLoader"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ajaxloaderr.gif" alt="loading" /></div>
				<div >
					<a class="add_outer_neww"  href="javascript:void(0);" id="add_reference_link" >ADD +</a>
				</div>
			</div>
             
            </div>   
                            <div class="row_outer item">	
                                
                                    
                            <input type="hidden" id="autoStatus" value="0" />
                            <input type="hidden" id="validateStatus" value="0" />
                            
							<?php echo CHtml::button('Submit',array('class'=>'submit_butt delete')); ?>
                                    
                                
                            </div> 
                        </div>
                            </fieldset>
                            
                           <?php $this->endWidget(); ?>
                            </div>
                    </div>
                  
                </div>
                

                </div>
                <!-- dashpro right-form end -->
            </div>
            <!-- dashpro right end -->
    </div>
</div>
<div class="popup_container2">
	<div id="popup_box2" style="left:42%;">
		<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/loader.gif" alt="" />
	</div>
</div>
<div class="popup_container1">
	<div id="popup_box1">
    	
		 <form class="form-horizontal" id="ghAuthApi">
		<div class="area_set">
			<div class="git-header"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/icon_git.png">Sign in</div>
            <div id="gitError"></div>
			<div>
				<input value="" class="git_textarea" id="inputUsername" name="username" placeholder="GitHub Username" type="text">
			</div>
			<div class="eg_text"></div>
            <div>
				<input class="git_textarea" id="inputPassword" name="password" placeholder="GitHub Password" type="password">
            </div>
           
            
            
			<div class="red_butt" style="margin-right:77%;">
				  <button id="gitClick" class="btn" type="submit" style="border:none">Sign in</button>
			</div>
		</div>
		</form>
		<a id="popupBoxClose"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/profile_cancel.png" alt="" /></a>
	</div>
</div>
<!-- content outer end -->
<script type="text/javascript">
function loadPopupBox1(){
	$('#popup_box2').fadeIn("slow");
	$(".popup_container2").css({"z-index": "99","position": "fixed"});
}
function unloadPopMess1(){
	$('#popup_box2').fadeOut("slow");
	$("#popup_container2").css({"z-index": "-1"});
}
$(function(){
	$('.profile_cancel1').click(function(){if($(this).parent().attr('class')!='dynamic_row'){postForm();$(this).parent().html('');}});
	$('.profile_cancel').click(function(){if($(this).parent().attr('class')=='new_created'){postForm();$(this).parent().html('');}});
	$('.add_link').click(function(){var clone	=	$(this).parent().parent().parent().find('.dynamic_row').clone(true);
		$(clone).attr('class', 'new_created');$(this).parent().parent().parent().find('.container_outer').append(clone);});
	$('#add_link_edu').click(function(){$('#eduajaxLoader').show();var $ind	=	$('#educationRecords').val();$('#educationRecords').val(parseInt($ind)+1);
		$(this).parent().parent().parent().find('.container_outer').append('<div class="row_outer" id="edu'+$ind+'"></div>');
		$.ajax({url:'<?php echo CController::createUrl("/user/html",array('case'=>'education'));?>',type:'POST',success:function(data){$('#eduajaxLoader').hide();$('#edu'+$ind).html(data);}});});	
	$('#add_link_comp').click(function(){$('.compajaxLoader').show();var $ind	=	$('#companyRecords').val();$('#companyRecords').val(parseInt($ind)+1);$(this).parent().parent().parent().find('.container_outer').append('<div class="row_outer_new" id="company'+$ind+'"></div>');$.ajax({url:'<?php echo CController::createUrl("/user/html",array('case'=>'company'));?>',type:'POST',success:function(data){$('.compajaxLoader').hide();$('#company'+$ind).html(data);}});});
	$('#add_portfolio_link').click(function(){$('#portfolioajaxLoader').show();var $ind	=	$('#portfolioRecords').val();$('#portfolioRecords').val(parseInt($ind)+1);$(this).parent().parent().parent().find('.container_outer').append('<div class="row_outer" id="portfolio'+$ind+'"></div>');$.ajax({url:'<?php echo CController::createUrl("/user/html",array('case'=>'portfolio'));?>',type:'POST',success:function(data){$('#portfolioajaxLoader').hide();$('#portfolio'+$ind).html(data);}});});
	$('#add_openSource_link').click(function(){$('#openSourceajaxLoader').show();var $ind	=	$('#openSourceRecords').val();$('#openSourceRecords').val(parseInt($ind)+1);$(this).parent().parent().parent().find('.container_outer').append('<div class="row_outer" id="openSource'+$ind+'"></div>');$.ajax({url:'<?php echo CController::createUrl("/user/html",array('case'=>'opensource'));?>',type:'POST',success:function(data){$('#openSourceajaxLoader').hide();$('#openSource'+$ind).html(data);}});});
	$('#add_reference_link').click(function(){$('#referenceajaxLoader').show();var $ind	=	$('#referenceRecords').val();$('#referenceRecords').val(parseInt($ind)+1);$(this).parent().parent().parent().find('.container_outer').append('<div class="row_outer" id="reference'+$ind+'"></div>');$.ajax({url:'<?php echo CController::createUrl("/user/html",array('case'=>'reference'));?>',type:'POST',success:function(data){$('#referenceajaxLoader').hide();$('#reference'+$ind).html(data);}});});
	var $indexSkill	=	102;
	$('.add_outer').click(function(){
		var clone = $(this).parent().parent().parent().find('.dynamic_row').clone(true);
		var cloneName= $(clone).find("input[type=radio]");
		var cloneHidden= $(clone).find("input[type=hidden]");
		var cloneText= $(clone).find("input[type=text]");
		$(cloneName).attr("name",$(cloneName).attr("name").replace("[1_", "["+$indexSkill+"_"));
		$newname = $(cloneName).attr("name").slice(0,$(cloneName).attr("name").length - 0);
		$(cloneName).attr("name",$newname);
		$(cloneHidden).attr("name",$(cloneHidden).attr("name").replace("[1_", "["+$indexSkill+"_"));
		$newhiddenname = $(cloneHidden).attr("name").slice(0,$(cloneHidden).attr("name").length - 0);
		$(cloneHidden).attr("name",$newhiddenname);
		$(cloneText).attr("name",$(cloneText).attr("name").replace("[1_", "["+$indexSkill+"_"));
		$(clone).attr('class', 'new_created');
		$(this).parent().parent().parent().find('.skill_main_outer').append(clone);
		$(this).parent().parent().parent().find('.new_created').find('.skill_top_head').find("input[type=radio]").each(
			function (){
				var $cid	=	$(this).attr('id');
				$(this).parent().parent().find('#'+$cid).attr('id',$cid+'_'+$indexSkill);
				$(this).parent().parent().find('label[for='+$cid+']').attr('for',$cid+'_'+$indexSkill);
			}
		);
		$indexSkill++;
	});
});
$('.ajaxLoader').hide();
    
$('body').on('click','.profile_cancel',function(){
    var cur	=$(this);
	var $url = cur.attr('rel');
	$.ajax({
				url:$url,
				type:'POST',
				success:function(data){
					console.log(cur.parent().html(''));
				}
	}); 
}); 
//$('#'+document.activeElement.id).on('change',function(){console.log('hi');});

$('body').on('change',function(){
	if(!$(this).hasClass("error"))
	validateField();
	});

//$(".next").click(function(){postForm();$("#autoStatus").val(1);if($("#validateStatus").val()==1)validate();});
var request;
function postForm(){
		if($("#validateStatus").val()==1)
            validate();
		if(request!=null)
			request.abort();
		request=$.ajax({
				url:'<?php echo CController::createUrl("/user/autoSave");?>',
				type:'POST',
				data : $('#developer-form').serialize(),
				success:function(data){
                    //$("#typing").hide();
					//$("#saving").show();
					$("#autoStatus").val(0);
					//$("#saving").slideUp(2000);
				}
		});
}
function logForm($action){
	$.ajax({
		url:'<?php echo CController::createUrl("/user/log");?>',
		type:'POST',
		data : 'log_action='+$action,
		success:function(data){
			console.log('log saved'+data);
		}
	});
}
</script>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/introjs.css" rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/confirm.css" rel="stylesheet" type="text/css" />
<script type='text/javascript' src="<?php echo Yii::app()->theme->baseUrl.'/js/confirm.js';?>"></script>
<script type='text/javascript' src="<?php echo Yii::app()->theme->baseUrl.'/js/intro.js';?>"></script>
<script type='text/javascript' src="<?php echo Yii::app()->theme->baseUrl.'/js/sliding.form.js';?>"></script>
<script type='text/javascript' src="<?php echo Yii::app()->theme->baseUrl.'/js/git.js';?>"></script>
<script type="text/javascript">
    function getParameters() {
      var searchString = window.location.search.substring(1),
          params = searchString.split("&"),
          hash = {};
    
      if (searchString == "") return {};
      for (var i = 0; i < params.length; i++) {
        var val = params[i].split("=");
        hash[unescape(val[0])] = unescape(val[1]);
      }
      return hash;
    }
    $(window).load(function(){
        console.log(getParameters());
        var param = getParameters();
        if(typeof param.first !== "undefined"){
            
            introJs().start();
            //introJs().setOption({'showBullets': false,  });
            //introJs().start();
            $(".introjs-prevbutton").hide();
            $(".introjs-skipbutton").on("click", function(){
               $(".dashpro_left").css("position","fixed") ;
            });
        }else
        {
            $(".dashpro_left").css("position","fixed") ;
        }
    });


function myfunction() {
    setCookie("username", $("#title").val(), 365);
    location.reload();
}

// 2. Asynchronously load the Upload Widget and Player API code.
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. Define global variables for the widget and the player.
//    The function loads the widget after the JavaScript code
//    has downloaded and defines event handlers for callback
//    notifications related to the widget.
var widget;
var player;

function onYouTubeIframeAPIReady() {
	widget = new YT.UploadWidget('widget', {
		width: 500,
		events: {
			'onUploadSuccess': onUploadSuccess,
			'onProcessingComplete': onProcessingComplete,
			'onApiReady': onApiReady
		}
	});
}

// 4. This function is called when a video has been successfully uploaded.
function onUploadSuccess(event) {
	$('#youTubeURL').val('http://www.youtube.com/v/'+event.data.videoId);
}
// 5. This function is called when a video has been successfully
//    processed.
function onProcessingComplete(event) {
   postForm();
   /*player = new YT.Player('player', {
        height: 390,
        width: 640,
        videoId: event.data.videoId,
        events: {}
    });*/
}

function onApiReady(event) {
    console.log("onApiReady is fired");
    widget.setVideoTitle(getCookie("username"));
}

function setCookie(c_name, value, exdays) {
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
    document.cookie = c_name + "=" + c_value;
}

function getCookie(c_name) {
    var i, x, y, ARRcookies = document.cookie.split(";");
    for (i = 0; i < ARRcookies.length; i++) {
        x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
        y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
        x = x.replace(/^\s+|\s+$/g, "");
        if (x == c_name) {
            return unescape(y);
        }
    }
}
function unloadPopupBox(){$('#popup_box1').fadeOut("slow");$(".popup_container1").css({"z-index": "-1", 'position': 'relative'});}
function loadPopupBox(){$('#popup_box1').fadeIn("slow");$(".popup_container1").css({"z-index": "99", 'position': 'fixed'});}
$('.popup').click(function(){if(!$(this).hasClass('reloadPage'))loadPopupBox();});
$('#popupBoxClose').click( function(){unloadPopupBox();});
$('.reloadPage').click(function(){ location.reload();});
</script>