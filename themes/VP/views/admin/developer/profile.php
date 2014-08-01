<?php
/* @var $this DeveloperController */
/* @var $model Developer */

$this->breadcrumbs=array(
	'Developers'=>array('index'),
	$profile->id,
);

$this->menu=array(
	array('label'=>'List Developer', 'url'=>array('index')),
	array('label'=>'Create Developer', 'url'=>array('create')),
	array('label'=>'Update Developer', 'url'=>array('update', 'id'=>$profile->id)),
	array('label'=>'Delete Developer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$profile->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Developer', 'url'=>array('admin')),
);
?>

<h1>View Developer #<?php echo $profile->id; ?></h1>

<?php $form=$this->beginWidget('CActiveForm', array('id'=>'developer-form','enableAjaxValidation'=>false,)); ?>
                <!-- dashpro right-form start -->
                <div class="dashpro_right_form">
                    <div class="sTop">
                        <div class="head_text_large sTop">Contact Information</div>
                        <div class="first_outer">     
                        <div class="step1">
<?php 
echo $form->textField($profile,'first_name',array('placeholder'=>"Firstname",  'class'=>"textarea")); ?>
<?php echo $form->textField($profile,'last_name',array('placeholder'=>"Lastname",  'class'=>"textarea")); ?>
<?php echo $form->textField($profile,'alternative_email',array('placeholder'=>"Email Address",  'class'=>"textarea")); ?>
<?php echo $form->textField($profile,'skype_name',array('placeholder'=>"Skype Name",  'class'=>"textarea required")); ?>
<?php echo $form->textField($profile,'phone',array('placeholder'=>"Phone",  'class'=>"textarea")); ?>
<?php echo $form->textField($profile,'address1',array('placeholder'=>"City, Country", 'class'=>"textarea")); ?>
            </div>
                        
                    </div>
                        <div class="mix_inner">
                            <div  class="head_text_large center_position">Education</div>
                            <div class="step2">
                                <div class="gray_outer">
                    <div class="container_outer">
              <?php 
			  if(!empty($profile->school)){
						foreach($profile->school as $key=>$school){	?>
                        <div class="row_outer">
<?php echo $form->hiddenField($profile,'educations[]',array('value'=>(isset($profile->educations[$key]))?$profile->educations[$key]:'')); ?>
<?php echo $form->textField($profile,'school[]',array('value'=>(isset($school))?$school:'','placeholder'=>"Enter your school",  'class'=>"textarea_w size3")); ?>
<?php echo $form->textField($profile,'degree[]',array('value'=>(isset($profile->degree[$key]))?$profile->degree[$key]:'','placeholder'=>"Enter your degree",  'class'=>"textarea_w size3")); ?>
<?php echo $form->textField($profile,'subject[]',array('value'=>(isset($profile->subject[$key]))?$profile->subject[$key]:'','placeholder'=>"Enter your subject",  'class'=>"textarea_w size4")); ?>
                        </div>
						<?php }?>
				<?php }
						else{ ?>
                         <div class="row_outer">
<?php echo $form->textField($profile,'school[]',array('placeholder'=>"University",  'class'=>"textarea_w size3")); ?>
<?php echo $form->textField($profile,'degree[]',array('placeholder'=>"Degree",  'class'=>"textarea_w size3")); ?>
<?php echo $form->textField($profile,'subject[]',array('placeholder'=>"Major/Subject",  'class'=>"textarea_w size4")); ?>
                        </div>
                        <div class="row_outer_edu dynamic_row">
<?php echo $form->textField($profile,'school[]',array('placeholder'=>"University",  'class'=>"textarea_w size3")); ?>
<?php echo $form->textField($profile,'degree[]',array('placeholder'=>"Degree",  'class'=>"textarea_w size3")); ?>
<?php echo $form->textField($profile,'subject[]',array('placeholder'=>"Major/Subject",  'class'=>"textarea_w size4")); ?>
                       
                        </div>
                        <?php } ?>
                    </div>                    
                    
                </div>   
                            </div>
                        </div>
                        <div class="mix_inner">
                            <div class="step3_main_outer">
                                <div class="head_text_large step3_head_set">Employment</div> 
                                <div class="step3 ">
                                    <div class="gray_outer">
                        <div class="container_outer">
					<?php if(!empty($profile->company)){
						foreach($profile->company as $key=>$company){?>
                        <div class="row_outer_new">
                                <div class="inner_left ">
    <?php echo $form->textField($profile,'company[]',array('value'=>(isset($company))?$company:'','placeholder'=>"Company",  'class'=>"textarea_w")); ?>
    <?php echo $form->textField($profile,'role[]',array('value'=>(isset($profile->role[$key]))?$profile->role[$key]:'','placeholder'=>"Role",  'class'=>"textarea_w")); ?>
    <?php echo $form->textField($profile,'start_time[]',array('value'=>(isset($profile->start_time[$key]))?$profile->start_time[$key]:'','placeholder'=>"From",'class'=>"textarea size7",'title'=>'YYYY-MM-DD')); ?>
    <?php echo $form->textField($profile,'end_time[]',array('value'=>(isset($profile->end_time[$key]))?$profile->end_time[$key]:'','placeholder'=>"Till",'class'=>"textarea size8",'title'=>'YYYY-MM-DD')); ?>
                                </div>
                                <div class="inner_right">
    <?php echo $form->textField($profile,'link[]',array('value'=>(isset($profile->link[$key]))?$profile->link[$key]:'','placeholder'=>"Link",  'class'=>"textarea_w")); ?>
    <?php echo $form->textArea($profile,'description[]',array('value'=>(isset($profile->description[$key]))?$profile->description[$key]:'','placeholder'=>"What did you work on?", 'class'=>"textarea_w",'rows'=>"3" )); ?>
                                </div>
                        </div>
                        <?php }?>
						<?php }else{ ?>
                        <div class="row_outer_new">
                            <div class="inner_left ">
<?php echo $form->textField($profile,'company[]',array('placeholder'=>"Company",  'class'=>"textarea_w")); ?>
<?php echo $form->textField($profile,'role[]',array('placeholder'=>"Role",  'class'=>"textarea_w")); ?>
<?php echo $form->textField($profile,'start_time[]',array('placeholder'=>"From",  'class'=>"textarea size7",'title'=>'YYYY-MM-DD')); ?>
<?php echo $form->textField($profile,'end_time[]',array('placeholder'=>"Till",  'class'=>"textarea size8",'title'=>'YYYY-MM-DD')); ?>
                            </div>
							<div class="inner_right">
<?php echo $form->textField($profile,'link[]',array('placeholder'=>"Link",  'class'=>"textarea_w")); ?>
<?php echo $form->textArea($profile,'description[]',array('placeholder'=>"What did you work on?", 'class'=>"textarea_w",'rows'=>"3" )); ?>
							</div>
                            
                            
                        </div>
                        <?php } ?>
                        </div>                       
                    </div>
                                </div> 
                            </div>
                           
                        </div>
                        <div class="mix_inner">
                            <div class="step4_main_outer">
                                <div class="head_text_large ">Online Presence</div>
                                <div class="step4">
<?php echo $form->textField($profile,'linkedIn',array('placeholder'=>"LinkedIn profile",  'class'=>"textarea")); ?>
<?php echo $form->textField($profile,'twitter',array('placeholder'=>"Twitter page",  'class'=>"textarea")); ?>
<?php echo $form->textField($profile,'gitHub',array('placeholder'=>"GitHub profile",  'class'=>"textarea")); ?>
<?php echo $form->textField($profile,'website',array('placeholder'=>"Personal website",  'class'=>"textarea")); ?>
<?php echo $form->textField($profile,'topCoder',array('placeholder'=>"Top Coder profile",  'class'=>"textarea")); ?>
<?php echo $form->textField($profile,'codeChef',array('placeholder'=>"Code Chef profile",  'class'=>"textarea")); ?>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="mix_outer">
                        <div id="s3" class="head_text_large s3">Self Skills Assessment</div>  
                        <?php if(count($skillCategory)>0){?>
                             <div class="step5">
                                <div class="gray_outer_skill">
                                            <div class="skill_head_outer">
                                              <div class="skill_top_head">
                                                <div class="skill_text_outer">Aware</div>
                                                <div class="skill_text_outer1">Studied</div>
                                                <div class="skill_text_outer1">Experienced</div>
                                                <div class="skill_text_outer1">Pretty Good</div>
                                                <div class="skill_text_outer1 right_b">Guru</div> 
                                              </div>
                                                
                                            </div>
                                   <?php foreach($skillCategory as $Skills){ ?>
                                        <div>
                                            <div class="skill_main_outer">
                                                
<?php if(!empty($profile->skill[$Skills->title.'_'.$Skills->id])){
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
                                                        
														<?php 
														$valueRating = array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5');
														foreach($valueRating as $val){?>
                                                        	<div class="<?php echo ($val==$profile->rating[$Skills->title.'_'.$Skills->id][$key])?'fade_chk_active':'fade_chk';?> textarea_skill">&nbsp;</div>
                                                        <?php }?>
                                                        
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
           <?php 
														foreach($valueRating as $val){?>
                                                        	<div class="<?php echo ($val==$profile->rating[$Skills->title.'_'.$Skills->id][$key])?'fade_chk_active':'fade_chk';?> textarea_skill">&nbsp;</div>
                                                        <?php }?>
        </div>
    </div>    
</div>

<?php 
		}
	}
	?>
<?php }else{ ?>
	<div class="skill_row_outer">
    		<div class="skill_left_outer">
            	<div class="lable_text"><?php echo $Skills->title;?> :</div>
                <div class="skilltext_area">
                	<?php echo $form->textField($profile,'skill['.$Skills->title.'_'.$Skills->id.'][0]',array('placeholder'=>$Skills->description,  'class'=>"textarea_skill")); ?>
                </div>
            </div>
            <div class="skill_top_head">
            	<?php 
														$valueRating = array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5');
														foreach($valueRating as $val){?>
                                                        	<div class="fade_chk textarea_skill">&nbsp;</div>
                                                        <?php }?>
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
            <?php 
														
														foreach($valueRating as $val){?>
                                                        	<div class="fade_chk textarea_skill">&nbsp;</div>
                                                        <?php }?>
        </div>
    </div>
<?php } ?>
                                            </div>
                                            
                                        </div>
                                    <?php } ?>
                                 </div>             
                             </div>
                         <?php } ?>
                        <div class="text_arrow_outer">
                            <div class="head_text_large center_position head_text_large1">Portfolio & OS Contribution</div>
                            
                        </div>
                        <div class="step6">
                        	<p>
                                We would love to know more about the products you have built and/or the projects you have worked on as part of a team.
                                
                            </p>
               <div class="portfolio_social_buttons_outr ">
                	<?php 
					if(!empty($profile->gitHub)){?>
                     <a id="gitLink" class="portfolio_social_buttons_gray" href="<?php echo $profile->gitHub?>" target="_blank">
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/icon_git.png">
						<div class="social_text" id="gitText">Connected</div>
					</a>
					<?php }?>
                </div>
                            
                            <div class="gray_outer">
            <div class="container_outer">            
<?php if(!empty($profile->project)){
	foreach($profile->project as $key=>$project){
	?>
            
                <div class="row_outer">
    				
    				<?php echo $form->textField($profile,'url[]',array('value'=>(isset($profile->url[$key]))?$profile->url[$key]:'','placeholder'=>"Url",'class'=>"textarea_w size9"));?>
                    <?php echo $form->textField($profile,'project[]',array('value'=>(isset($project))?$project:'','placeholder'=>"Description",'class'=>"textarea_w size9"));?>
    				<?php echo $form->textField($profile,'language[]',array('value'=>(isset($profile->language[$key]))?$profile->language[$key]:'','placeholder'=>"Language/framework used",'class'=>"textarea_w size4"));?>
                 </div>
             
<?php 
	}?>
    		
           
<?php }else{ ?>
            <div class="row_outer">

<?php echo $form->textField($profile,'url[]',array('placeholder'=>"Url",'class'=>"textarea_w size9"));?>
<?php echo $form->textField($profile,'project[]',array('placeholder'=>"Description",'class'=>"textarea_w size9"));?>
<?php echo $form->textField($profile,'language[]',array('placeholder'=>"Language/framework used",'class'=>"textarea_w size4"));?>
             </div>
             <div class="row_outer">
<?php echo $form->textField($profile,'url[]',array('placeholder'=>"Url",'class'=>"textarea_w size9"));?>
<?php echo $form->textField($profile,'project[]',array('placeholder'=>"Description",'class'=>"textarea_w size9"));?>
<?php echo $form->textField($profile,'language[]',array('placeholder'=>"Language/framework used",'class'=>"textarea_w size4"));?>
             </div>
<?php } ?>
            </div>
       </div>   
                        </div>
                     </div>
                    <div class="mix_outer">
                        <div class="text_arrow_outer">
                          
                            <div id="ref" class="head_text_large center_position head_text_large1 s9">Referrals</div>
                          </div>
                        <div class="step6">
                        	<p>
                                We are interested in knowing more about your community. Tell us about 5 of your engineer friends/colleagues who you think would be a good fit for VenturePact. We will not disclose your identity to them. 
                            </p>
                            <div class="gray_outer">
                                <div class="container_outer">
<?php if($profile->referenceName){
	$count	=	0;
	foreach($profile->referenceName as $key=>$ref){
	?>
								<div class="row_outer">	
									<div class="row_outer">	
                    <?php echo $form->textField($profile,'referenceName[]',array('value'=>(isset($ref))?$ref:'','placeholder'=>"Name",'class'=>"textarea_w size9"));?>
                    <?php echo $form->textField($profile,'referenceEmail[]',array('value'=>(isset($profile->referenceEmail[$key]))?$profile->referenceEmail[$key]:'','placeholder'=>"Email Address",'class'=>"textarea_w size9"));?>
                    <?php echo $form->textField($profile,'referencePhone[]',array('value'=>(isset($profile->referencePhone[$key]))?$profile->referencePhone[$key]:'','placeholder'=>"LinkedIn Profile URL",'class'=>"textarea_w size4"));?>
									</div>
								</div>
<?php $count++;
	}
}?>
                                </div>
                                </div>   
                        </div>
                    </div>
                    <div class="mix_outer">
                    	<div class="text_arrow_outer">
                            
                            <div class="head_text_large center_position head_text_large1">Video Question</div>
                            
                        </div>
                        <div class="f11_outer">
                            <div class="step8">
                            	<p>Tell us about one project you undertook that completely failed. Why did it fail? What did you learn from it?</p>
                                <div class="step8_gray_outer">
                                    <div class="container_outer">
                                       <div class="row_outer" style="text-align:center;color: #999999;">
										<?php if(isset($profile->question[1])){?>
                                            <embed width="100%" height="345" src="http://www.youtube.com/v/<?php echo $profile->question[1];?>" type="application/x-shockwave-flash"></embed></div>
										<?php }else{ ?>
                                        	Video not recorded.
                                        <?php } ?>
                                    </div>
                                    <div class="row_outer"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="mix_outer">
                    	<div class="text_arrow_outer">
                            
                            <div class="head_text_large center_position head_text_large1">Company List</div>
                            
                        </div>
                        <div class="f11_outer">
                            <div class="step8">
                            	<p>List of companies</p>
                                <div class="step8_gray_outer">
                                    <div class="container_outer">
                                       	<div class="status_inner">
                                    	<div class="status_table">
                                        	<b>Company Name</b>
                                            <b class="table_width">In Review</b>
                                            <b class="table_width">Interview Requested</b>
                                            <b class="table_width">Offered Position</b>
                                        </div>
                                    <?php 
										foreach($CompanyHasDeveloper as $company)
										{
										?>
                                        <div class="status_table">
                                        	<p class="table_width_first"><?php echo $company->company->name;?></p>
                                          <p class="table_width"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/<?php echo ($company->status_id==2)?'grren_radio.png':'grey_radio.png'; ?>" /></p>
                                          <p class="table_width"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/<?php echo ($company->status_id==3)?'grren_radio.png':'grey_radio.png'; ?>" /></p>
                                          <p class="table_width"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/<?php echo ($company->status_id==4)?'grren_radio.png':'grey_radio.png'; ?>" /></p>
                                           
										   
                                        </div>
										<?php }?>
                                    </div>
                                    <div class="row_outer"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    </div>
<?php $this->endWidget(); ?>