<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/confirm.css" rel="stylesheet" type="text/css" />
<div class="popup_container2">
	<div id="popup_box2">
		<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/loader.gif" alt="" />
	</div>
</div>
<!-- Top outer -->
<div id="top_outer">
    <div id="top_wrapper">
        <div class="banner">
            <div class="logo_outer">
            <?php echo CHtml::link('<img src="'.Yii::app()->theme->baseUrl.'/images/vp-logo.png" alt="Vp_Logo" border="0" />',array('/site')); ?>
            </div>            
        </div>
    </div>
</div>
<!-- Top outer end -->     

<div class="main_wrapper_outer">
    <div class="main_wrapper_inner">
            <!--<div class="border_center"></div>-->
             <?php $form=$this->beginWidget('CActiveForm', array('id'=>'users-form','enableAjaxValidation'=>false,'clientOptions'=>array('validateOnSubmit'=>"subForm()",),)); ?>
            <div class="get_started_outr">
            	<div class="getStarted_right_bar">
                <div class="getStarted_heading_outr">
                    <div class="getStarted_heading">Let's get started!</div>
                    <p>Tell us what you need and we will try to find you the best partner.</p>
                </div>
                <div class="clear"></div>
                <!--<div class="login_or">
                    <div class="login_or_border"></div>
                    <span>or</span>
                </div>-->
               
               <!-- Sign Up area -->  
                 <div class="getStarted_register_box">
                    <div class="getStarted_box">
                        <h3>What do you need done? </h3>
                        <div class="getStarted_box_field">  
                           <?php 
							$list	=	array('Build a new'=>'Build a new','Add features to'=>'Add features to','Rebuild/repair an existing'=>'Rebuild/repair an existing','Add security to'=>'Add security to','Design a new'=>'Design a new','Other work on'=>'Other work on',);
							echo $form->dropDownlist($users,'request_type',$list,array('class'=>'textarea')); ?>
                            <?php echo $form->error($users,'request_type'); ?>
                        </div>
                        <div class="getStarted_box_field right_class">                            
                            <?php 
							$list2	=	array('iPhone/iPad app'=>'iPhone/iPad app','Android app'=>'Android app','Web app'=>'Web app','Static website'=>'Static website','Business application (Sharepoint, Oracle etc)'=>'Business application (Sharepoint, Oracle etc)','Other software'=>'Other software','Google Glass app'=>'Google Glass app');							
							echo $form->dropDownlist($users,'application_type',$list2,array('class'=>'textarea')); ?>
                            <?php echo $form->error($users,'application_type'); ?>
                        </div>
                     </div>
                    <div class="getStarted_box">
                    
                        <div class="getStarted_box_field"> 
                            <h3>Name </h3> 
                             <?php echo $form->textField($users,'name',array('class'=>'textarea required','placeholder'=>'Name')); ?>
                            <?php echo $form->error($users,'name'); ?>
                        </div>
                        <div class="getStarted_box_field right_class"> 
                            <h3>Company Name </h3> 
                             <?php echo $form->textField($users,'company_name',array('class'=>'textarea required','placeholder'=>'Company Name')); ?>
                            <?php echo $form->error($users,'company_name'); ?>
                        </div>
                     </div>
                     <div class="getStarted_box">
                    
                        <div class="getStarted_box_field_long"> 
                            <h3>Email </h3> 
                             <?php echo $form->textField($users,'email',array('class'=>'textarea required email','placeholder'=>'Email')); ?>
                            <?php echo $form->error($users,'email'); ?>
                        </div>
                     </div>
                     
             <!--  <p class="size-12 centered p-663524">By clicking on "Go" below, you agree to the
  <a href="#">Terms &amp; Conditions</a>.</p> -->
                     
                     
                     <div class="getStarted_box">
                            <div class="getStarted_go">
                            <!--<a href="#" id="hide">GO</a>-->
                            <?php echo CHtml::submitButton("Go",array('class'=>'btn_sub step1')); ?>
                        </div>
                     </div>
            </div>
        </div>
        	</div>
           <!-- Sign Up area End -->
           <?php if(isset($_REQUEST['id'])){?>
<script type="text/javascript">
<!--popup-->
$(document).ready( function() {
	$(".getStarted_right_bar").hide();
	$(".getStarted_right_bar1").show();
});
</script>        
            <div class="get_started_outr2">
                <div class="getStarted_right_bar1" >
                    <div class="getStarted_heading_outr">
                        <div class="getStarted_heading">These questions will help us match you with the right partner.</div>
                        <p>More the detail, better the match. </p>
                    </div>
                    <div class="clear"></div>
                   <!-- Sign Up area -->  
                     <div class="getStarted_register_box">
                     	<div class="getStarted_box">
                            <div class="getStarted_box_field_long"> 
                                <h3>Please provide a summary of what you are looking to build. We are looking for a short description of the product, features and functionality. </h3> 
                                 <?php echo $form->textArea($users,'project_description',array('class'=>'textarea required','placeholder'=>'Eg: Amazon: I am looking to build an e commerce website with the following features:
i) Sign in using Facebook and Twitter, ii) Landing page with a small listing of special offers, iii) Product listings page with filtration functionality, iv) Product page with product details, pricing and pictures, v) Checkout page and payments functionality.   
')); ?>
                                <?php echo $form->error($users,'project_description'); ?>
                            </div>
                         </div>
                        <div class="getStarted_box">

                        	<div class="range_outer">
                                <h3>What is your budget range?  </h3>
                                <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/dollar.png" class="dollar_img" />
                                <div class="getStarted_box_field range_box">  
                                    <?php echo $form->textField($users,'budget_min',array('class'=>'textarea required phone min','placeholder'=>'Min', 'maxlength'=>"10")); ?>
                                <?php echo $form->error($users,'budget_min'); ?>
                                </div>
                                <div class="budget_range">-</div>
                                <div class="getStarted_box_field range_box">                            
                                    <?php echo $form->textField($users,'budget_max',array('class'=>'textarea required phone max','placeholder'=>'Max','maxlength'=>"10")); ?>
                                <?php echo $form->error($users,'budget_max'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="getStarted_box">

                            <div class="range_outer">
                                <h3>What is your deadline for the project?</h3>
                                <div class="getStarted_box_field sub_field"> 
									<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
												'model' => $users,
												'attribute' => 'dead_line',
												'options' => array(
														'dateFormat' => 'yy-mm-dd',
														'yearRange'=>'2014:2020',
														'showOtherMonths' => true,
														'minDate'=>'0',
														'selectOtherMonths' => true,
														'changeYear' => true,
														'changeMonth' => true,
												),
												'htmlOptions' => array(
														'placeholder'=>"YYYY-MM-DD",'class'=>"textarea required",'maxlength'=>"10"
												),
												));?>
                                <?php echo $form->error($users,'dead_line'); ?>
                            	</div>
                            </div>
						</div>
						<div class="getStarted_box">
							<div class="range_outer">
								<h3>Is there any progress that has already been made? </h3>
								<div class="getStarted_box_field sub_field">
								<?php $list3=array('Its just an idea right now'=>'Its just an idea right now',
								'Mock ups are done'=>'Mock ups are done',
								'Designs are done'=>'Designs are done',
								'Frontend is ready'=>'Frontend is ready',
								'Backend is ready'=>'Backend is ready',
								'Prototype is ready but needs improvement'=>'Prototype is ready but needs improvement',
								'Other'=>'Other',);
								echo $form->dropDownlist($users,'progress_status',$list3,array('class'=>'textarea required','placeholder'=>'Progress Status'));
								echo $form->error($users,'progress_status'); ?>
								</div>
                            </div>
                         </div>
                         <div class="getStarted_box">
                         	<div class="range_outer">
                                <h3>Do you have a language preference?</h3>
                                <div class="getStarted_box_field sub_field"> 
                                    <?php echo $form->textField($users,'language',array('class'=>'textarea required','placeholder'=>'Eg: Python, Ruby')); ?>
                                	<?php echo $form->error($users,'language'); ?>
                                </div>
                            </div>
                         </div>

                         <div class="getStarted_box">
                            <div class="getStarted_box_field2 radio_getStarted"> 
                            	<h3>What is the size of your company?</h3>
                                <div class="company_size_radio">
                               <span>
                                	<?php echo $form->radioButton($users,'size_of_company[]',array('value'=>'1-10','checked'=>'checked')); ?>
                                	<?php echo $form->error($users,'size_of_company'); ?>
                                	<p>1-10</p>
                                </span>
                                <span>
                                	<?php echo $form->radioButton($users,'size_of_company[]',array('value'=>'10-100')); ?>
                                	<?php echo $form->error($users,'size_of_company'); ?>
                                	<p>10-100</p>
                                </span>
                                <span>
                                	<?php echo $form->radioButton($users,'size_of_company[]',array('value'=>'100-1000')); ?>
                                	<?php echo $form->error($users,'size_of_company'); ?>
                                	<p>100-1000</p>
                                </span>
                                <span>
                                	<?php echo $form->radioButton($users,'size_of_company[]',array('value'=>'>1000')); ?>
                                	<?php echo $form->error($users,'size_of_company'); ?>
                                	<p> >1000</p>
                                </span>
                                </div>                                
                            </div>
                         </div>
                         <div class="getStarted_box">
                         	<h3>Please provide dropbox or GDrive links to any documents (mockups etc) that you think might help us better understand your needs. </h3> 
                            <div class="getStarted_box_field_long"> 
                                 <?php echo $form->textField($users,'document_link',array('class'=>'textarea','placeholder'=>'Paste the link(s) here')); ?>
                                <?php echo $form->error($users,'document_link'); ?>
                            </div>
                         </div>
                  		 <div class="getStarted_box">
                            <div class="getStarted_submit"> 
                                <?php echo CHtml::submitButton("Submit",array('class'=>'btn_sub step2')); ?>
                            </div>
                         </div>
                </div>
            </div>
        	</div>
            <?php } ?>
           <!-- Sign Up area End -->  
             <?php $this->endWidget(); ?>
    </div>
</div>


<?php if(Yii::app()->user->hasFlash('saved')):?>
<script type="text/javascript">$(document).ready( function() {
	function loadPopMess(){
		$('.mess_popup').fadeIn("slow");
		$(".mess_popup_container").css({
			"z-index": "99","height":"100%"
		});
	}
	loadPopMess();});</script>
<div class="mess_popup_container">
	<div class="mess_popup"> 
        <div class="area_set">  
			<div class="success_icon_outer" ><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/success_icon.png" alt="" /></div>
            <div class="success_text"><span>Submitted</span><br/>
                <?php echo Yii::app()->user->getFlash('saved'); ?>
            </div>            
		</div>
        <a class="popupBoxClose"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/profile_cancel.png" alt="" /></a>
	</div>
</div>
<?php endif; ?>
<?php if(Yii::app()->user->hasFlash('error')):?>
<script type="text/javascript">$(document).ready( function() {
    function loadPopMess() {    // To Load the Popupbox
            $('.mess_popup').fadeIn("slow");
            $(".mess_popup_container").css({ // this is just for style
                "z-index": "99","height":"100%"
            });        
        } 
    loadPopMess();});</script>
<div class="mess_popup_container">
	<div class="mess_popup"> 
        <div class="area_set">  
           <div class="success_icon_outer" ><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/error_icon.png" alt="" /></div>
           <div class="poperror_text"><span></span><?php echo Yii::app()->user->getFlash('error'); ?></div>
       	</div>
        <a class="popupBoxClose"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/profile_cancel.png" alt="" /></a>
	</div>
</div>
<?php endif; ?>
<script type="text/javascript">
<!--popup-->


$(document).ready( function() {
	
	function subForm(){
		if(event.keyCode == 13){
			$('.btn_sub').click();
			return false;
		}
	}
	function valid(){
		var fine	=	1;
		$('.getStarted_right_bar :input').each(function (){
			if($(this).hasClass('required') && $(this).val().length==0){
				$(this).addClass('error');
				$(this).attr('title','Please enter required field');
				fine	=	0;
			}else if($(this).hasClass('email') && !testEmail($(this).val())){
				$(this).addClass('error');
				$(this).attr('title','Please enter valid email address');
				fine	=	0;
			}else
				$(this).removeClass('error');
		});
		return fine;
	}
	function validStep2(){
		var fine	=	1;
		$('.getStarted_right_bar1 :input').each(function (){
			if($(this).hasClass('required') && $(this).val().length==0){
				$(this).addClass('error');
				$(this).attr('title','Please enter required field');
				fine	=	0;
			}else if($(this).hasClass('phone') && !testPhone($(this).val())){
				$(this).addClass('error');
				$(this).attr('title','Please enter valid email address');
				fine	=	0;
			}else
				$(this).removeClass('error');
		});
		if(parseInt($('.getStarted_right_bar1 .min').val())>=parseInt($('.getStarted_right_bar1 .max').val())){
			$('.getStarted_right_bar1 .max').addClass('error');
			$('.getStarted_right_bar1 .max').attr('title','Please enter valid amount');
			fine	=	0;
		}
		return fine;
	}
	function valid1(){
		var fine	=	1;
		$('#users-form .error').each(function (){
			if($(this).hasClass('required') && $(this).val().length==0){
				$(this).addClass('error');
				$(this).attr('title','Please enter required field');
				fine	=	0;
			}else if($(this).hasClass('email') && !testEmail($(this).val())){
				$(this).addClass('error');
				$(this).attr('title','Please enter valid email address');
				fine	=	0;
			}else if($(this).hasClass('phone') && !testPhone($(this).val())){
				$(this).addClass('error');
				$(this).attr('title','Please enter valid amount');
				fine	=	0;
			}else{
				$(this).removeClass('error');
			}
		});
		return fine;
	}
	$('#users-form').on('change', 'input', function(){valid1();});
	$("#hide").click(function(){
		if(valid()){
			$(".getStarted_right_bar").hide();
			$(".getStarted_right_bar1").show();
		}
	});
	$("#show").click(function(){
		$(".getStarted_right_bar").show();
		$(".getStarted_right_bar1").hide();
	});
//login sign up Function End
	$('.popupBoxClose').click(function(){unloadPopMess();});
	function unloadPopMess(){
		$('.mess_popup').fadeOut();
		$(".mess_popup_container").css({
			"z-index": "-1","height":"0"
		});
	}
	$('.btn_sub').click(function(){
		if($(this).hasClass("step1"))
			if(!valid())
				return false;
			else
				$('#users-form').submit();
		if($(this).hasClass("step2"))
			if(!validStep2())
				return false;
			else
				$('#users-form').submit();
	});
});


(function($){$.confirm = function(params){
	if($('#confirmOverlay').length){return false;}
	var buttonHTML = '';
	$.each(params.buttons,function(name,obj){
		buttonHTML += '<a href="#" class="button '+obj['class']+'">'+name+'<span></span></a>';
		if(!obj.action){obj.action = function(){};}
	});
	var markup = ['<div id="confirmOverlay">','<div id="confirmBox">','<h1>',params.title,'</h1>','<p>',params.message,'</p>','<div id="confirmButtons">',buttonHTML,'</div></div></div>'].join('');
	$(markup).hide().appendTo('body').fadeIn();
	var buttons = $('#confirmBox .button'),i = 0;
	$.each(params.buttons,function(name,obj){buttons.eq(i++).click(function(){obj.action();$.confirm.hide();return false;});});}
	$.confirm.hide = function(){$('#confirmOverlay').fadeOut(function(){$(this).remove();});}
})(jQuery);
</script>
<script type='text/javascript' src="<?php echo Yii::app()->theme->baseUrl.'/js/confirm.js';?>"></script>