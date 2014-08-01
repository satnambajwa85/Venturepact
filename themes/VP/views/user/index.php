<?php if(Yii::app()->user->hasFlash('success22')):?>
<script type="text/javascript">
$(document).ready( function() {
	function loadPopMess() {$('.mess_popup').fadeIn("slow");$(".mess_popup_container").css({"z-index": "99"});}
	loadPopMess();
	$('.popupBoxClose').click( function(){$('.mess_popup').fadeOut("slow");$(".mess_popup_container").css({"z-index":"-1",'position':'relative'});});
});</script>
<div class="mess_popup_container">
	<div class="mess_popup"> 
        <div class="area_set">  
			<div class="success_icon_outer" ><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/success_icon.png" alt="" /></div>
            <div class="success_text"><span><?php echo Yii::app()->user->getFlash('success'); ?></span><br/>
                
            </div>            
		</div>
        <a class="popupBoxClose"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/profile_cancel.png" alt="" /></a>
	</div>
</div>
<?php endif; ?>
<?php if(Yii::app()->user->hasFlash('success1')):?>
<script type="text/javascript">
$(document).ready( function() {
	function loadPopMess() {$('.mess_popup').fadeIn("slow");$(".mess_popup_container").css({"z-index": "99"});}
	loadPopMess();
	$('.popupBoxClose').click( function(){$('.mess_popup').fadeOut();$(".mess_popup_container").css({"z-index":"-1",'position':'relative'});});
});</script>
<div class="mess_popup_container">
	<div class="mess_popup"> 
        <div class="area_set">  
			<div class="success_icon_outer" ><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/success_icon.png" alt="" /></div>
            <div class="success_text"><span>Email Sent</span><br/>
                <?php echo Yii::app()->user->getFlash('success1'); ?>
            </div>            
		</div>
        <a class="popupBoxClose"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/profile_cancel.png" alt="" /></a>
	</div>
</div>
<?php endif; ?>
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
                <div class="dashpro_left_box border_b" id="step2" data-step="2" data-intro="Apply to 5 startups that interest you the most. You can edit/add/delete anytime." data-position="right">
                    <div class="dashpro_left_box_main">
                        <div class="dashpro_img">
                            <?php echo CHtml::link('<img src="'.Yii::app()->theme->baseUrl.'/images/a1.png" alt="jobs" border="0" />',array('/user/jobs')); ?>
                        </div>
                        <div class="dashpro_title">Browse Jobs</div>
                    </div>
                </div>
                 <div class="dashpro_left_box" id="step3" data-step="3" data-intro="One your invite request is approved, you can track all of your applications here." data-position="right">
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

<?php $form=$this->beginWidget('CActiveForm', array('id'=>'developer-form','enableAjaxValidation'=>false,)); ?>
                <!-- dashpro right-form start -->
                <div class="dashpro_right_form">
                    <div class="sTop">
                        <div class="head_text_large sTop">Contact Information</div>
                        <div class="first_outer">     
                        <div class="step1">
    <?php echo $form->textField($profile,'first_name',array('placeholder'=>"Firstname",  'class'=>"textarea required")); ?>
    <?php echo $form->textField($profile,'last_name',array('placeholder'=>"Lastname",  'class'=>"textarea required")); ?>
    <?php echo $form->hiddenField($profile,'alternative_email',array('placeholder'=>"Email Address",  'class'=>"textarea","readonly"=>"readonly")); ?>
    <?php echo $form->textField($profile,'skype_name',array('placeholder'=>"Skype Name",  'class'=>"textarea required")); ?>
    <?php echo $form->textField($profile,'phone',array('placeholder'=>"Phone",  'class'=>"textarea required phone")); ?>
    <?php echo $form->textField($profile,'address1',array('placeholder'=>"City, Country", 'class'=>"textarea required")); ?>
                            </div>
                        <div class="first_arrow"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/first_arrow.png" alt="" /></div>
                    </div>
                        <div class="mix_inner">
                            <div class="f12_outer">
                                <div class="left_arrow"><img alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/last_arroww.png"></div>
                            </div>
                            <div class="head_text_large center_position head_text_large1">Education</div>
                            <div class="step2 w100">
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
    <?php //echo $form->textField($profile,'link[]',array('value'=>(isset($profile->link[$key]))?$profile->link[$key]:'','placeholder'=>"Link",  'class'=>"textarea_w")); ?>
    <?php echo $form->textArea($profile,'description[]',array('value'=>(isset($profile->description[$key]))?$profile->description[$key]:'','placeholder'=>"What did you work on?", 'class'=>"textarea_w",'rows'=>"5" )); ?>
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
<?php //echo $form->textField($profile,'link[]',array('placeholder'=>"Link",  'class'=>"textarea_w")); ?>
<?php echo $form->textArea($profile,'description[]',array('placeholder'=>"What did you work on?", 'class'=>"textarea_w",'rows'=>"5" )); ?>
							</div>
                            
                            
                        </div>
                        <?php } ?>
                        </div>                       
                    </div>
                                </div> 
                            </div>
                            <div class="second_arrow"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/2nd_arrow.png" alt="" /></div>
                        </div>
                        
                    </div>
                    <div class="mix_outer">
                    	<div class="f12_outer">
                                <div class="left_arrow"><img alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/last_arroww.png"></div>
                            </div>
                        <div id="s3" class="head_text_large center_position head_text_large1">Self Skills Assessment</div>  
                        <?php if(count($skillCategory)>0){?>
                             <div class="step5 w100">
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
                            <div class="f12_outer">
                                <div class="left_arrow"><img alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/last_arroww.png"></div>
                            </div>
                            <div class="head_text_large center_position head_text_large1">Portfolio & OS Contribution</div>
                            <div class="f12_outer">
                                <div class="right_arrow"><img alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/last_arroww_right.png"></div>
                            </div>
                        </div>
                      
                        <div class="step6 w100">
                        	<p>
                                We would love to know more about the products you have built and/or the projects you have worked on as a part of a team.
                                
                            </p>
                             <?php /*copied and pasted code*/?>
                        <div class="portfolio_social_buttons_outr ">
                	<?php if(!empty($profile->gitHub)){?>
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
                            <div class="f12_outer">
                                <div class="left_arrow"><img alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/last_arroww.png"></div>
                            </div>
                            <div id="ref" class="head_text_large center_position head_text_large1 s9">Referrals</div>
                            <div class="f12_outer">
                                <div class="right_arrow"><img alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/last_arroww_right.png"></div>
                            </div>
                        </div>
                        <div class="step6 w100">
                        	<p>
                               Tell us about at least 2 of your friends or colleagues who you think would be a good fit for VenturePact. You will remain anonymous. 
                            </p>
                            <p style="color:#2CCAFD;">If they are hired by a VenturePact company, you will receive 10% of their first paycheck. </p>
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
}else{?>
                                 <div class="row_outer">
                    <?php echo $form->textField($profile,'referenceName[]',array('placeholder'=>"Name",'class'=>"textarea_w size9"));?>
                    <?php echo $form->textField($profile,'referenceEmail[]',array('placeholder'=>"Email Address",'class'=>"textarea_w size9"));?>
                    <?php echo $form->textField($profile,'referencePhone[]',array('placeholder'=>"LinkedIn Profile URL",'class'=>"textarea_w size4"));?>
                                 </div> 
                                 
                                 <div class="row_outer">	
                    <?php echo $form->textField($profile,'referenceName[]',array('placeholder'=>"Name",'class'=>"textarea_w size9"));?>
                    <?php echo $form->textField($profile,'referenceEmail[]',array('placeholder'=>"Email Address",'class'=>"textarea_w size9"));?>
                    <?php echo $form->textField($profile,'referencePhone[]',array('placeholder'=>"LinkedIn Profile URL",'class'=>"textarea_w size4"));?>                                 </div>
                                
<?php } ?>
                                </div>
                                
                                 
                                </div>   
                        </div>
                    </div>
                    <div class="mix_outer">
                    	<div class="text_arrow_outer">
                            <div class="f12_outer">
                                <div class="left_arrow"><img alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/last_arroww.png"></div>
                            </div>
                            <div class="head_text_large center_position head_text_large1">Video Question</div>
                            <div class="f12_outer">
                                <div class="right_arrow"><img alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/last_arroww_right.png"></div>
                            </div>
                        </div>
                        <div class="f11_outer">
                            <div class="step8 w100">
                            	<p>Tell us about one project you undertook that completely failed. Why did it fail? What did you learn from it?</p>
								<div class="step8_gray_outer">
									<div class="container_outer">
										<div class="row_outer" style="text-align:center;color: #999999;">
										<?php if(isset($profile->question[1])){?>
                                            <embed width="100%" height="345" src="<?php echo $profile->question[1];?>" type="application/x-shockwave-flash"></embed></div>
										<?php }else{ ?>
                                        	Video not recorded.
                                        <?php } ?>
                                    </div>
                                    <div class="row_outer"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="f11_outer">
                            <div class="last_arrow"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/submit_arrow.png" alt="" /></div>
                        </div>
                        <div class="f11_outer">
                            <div class="submit_butt_new">Submitted</div>
                        </div>
                    
                    </div>
<?php $this->endWidget(); ?>
                </div>
                <!-- dashpro right-form end -->
            </div>
            <!-- dashpro right end -->
    </div>
</div>
<!-- content outer end -->
<script type="text/javascript">
$.each($('#developer-form').serializeArray(), function(index, value){
    $('[name="' + value.name + '"]').attr('readonly', 'readonly');
});
</script>

