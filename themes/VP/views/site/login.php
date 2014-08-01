<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/confirm.css" rel="stylesheet" type="text/css" />
<div class="popup_container1">
	<div id="popup_box1"> 
		<?php $form=$this->beginWidget('CActiveForm', array('id'=>'forget-form','enableClientValidation'=>true,'action'=>CController::createUrl("/site/forgotPassword"),'clientOptions'=>array('validateOnSubmit'=>true)));?>
		<div class="area_set">
			<div class="popup_head">&nbsp;<!-- Forgot your password?--></div>
			<div>
				<?php echo $form->textField($forgot,'email',array('placeholder'=>'Email','class'=>'textarea','id'=>'forget-form-email')); ?>
				<?php echo $form->error($forgot,'email'); ?>
			</div>
			<div class="eg_text"></div>
			<div class="red_butt" style="margin-right:37%">
				<?php echo CHtml::submitButton('Reset Password',array('name'=>'Submit','class'=>'button','id'=>'forgetPass')); ?>
			</div>
		</div>
		<?php $this->endWidget(); ?>
		<a id="popupBoxClose"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/profile_cancel.png" alt="" /></a>
	</div>
</div>
<div class="popup_container2">
	<div id="popup_box2">
		<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/loader.gif" alt="" />
	</div>
</div>


<!--New Pop Up -->
<!---->

<!--New Pop Up End -->

<!--New Pop Up for error  -->


<!--New Pop Up End -->

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
                	<div class="main_wrapper_content">
                        <div class="left_bar">
                            <div class="submit_profile">
                                <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/step1.png">
                                <p>To request an invite, submit<br>your profile and tell us about 5<br>of your preferred companies.</p>
                            </div>                
                            <div class="submit_profile">
                                <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/step2.png">
                                <p>We will review your profile<br>and may get in touch for more<br>information or an interview.</p>
                            </div>
                            <div class="submit_profile">
                                <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/step3.png">
                                <p>Once invited, your profile<br>will be recommended to your<br>preferred companies.</p>
                            </div>
                        </div>
                        <div class="border_center"></div>
                        <div class="right_bar">
                            <div class="head_text_large_login">Please Log In, or <a href="#" id="hide">Sign Up</a></div>
                            <div class="social_main">
                            	<a class="social_buttons" href="index.php?r=site/linkedin&lType=initiate">
                                        <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/icon_linkedin.png">
                                        <div class="social_text">Linkedin</div>
                                    </a>
                                
                            </div>
                            <div class="clear"></div>
                            <div class="login_or">
                            	<div class="login_or_border"></div>
                                <span>or</span>
                            </div>
                           <?php $form=$this->beginWidget('CActiveForm', array('id'=>'login-form','enableClientValidation'=>true,'clientOptions'=>array('validateOnSubmit'=>true,),)); ?>           
                                <div class="login_box">
                                    <?php echo $form->textField($model,'username',array('class'=>'textarea required email', 'placeholder'=>"Email")); ?>
                    <?php echo $form->error($model,'username'); ?>
                    
                                    <?php echo $form->passwordField($model,'password',array('class'=>'textarea required', 'placeholder'=>"Password")); ?>
                    <?php echo $form->error($model,'password'); ?>
                                     <a data-modal="modal-16" class="md-trigger forget_password popup" href="javascript:void(0);">Forgot your password?</a>
                                    
                                    <div class="login_butn">
                   		<input type="hidden" value="0" id="validate-login-form" />
						<?php echo CHtml::submitButton("Let's Go",array('class'=>'login_butn_submit btn_login')); ?>
                    </div>
                                </div>
                           <?php $this->endWidget(); ?>
                        </div>
                        <div class="right_bar_1" >
                            <div class="head_text_large_login">Please Sign Up, or <a href="#" id="show">Log In</a></div>
                            <div class="social_main">
                            	<a class="social_buttons" href="index.php?r=site/linkedin&lType=initiate">
                                        <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/icon_linkedin.png">
                                        <div class="social_text">Linkedin</div>
                                    </a>
                                
                            </div>
                            <div class="clear"></div>
                            <div class="login_or">
                            	<div class="login_or_border"></div>
                                <span>or</span>
                            </div>
                           <?php $form=$this->beginWidget('CActiveForm', array('id'=>'users-form','enableAjaxValidation'=>false,)); ?>
                           <!-- Sign Up area -->  
                             <div class="register_box"  >
<?php echo $form->textField($users,'display_name',array('class'=>'textarea required','placeholder'=>'Name')); ?>
<?php echo $form->error($users,'display_name'); ?>
<?php echo $form->textField($users,'username',array('class'=>'textarea required email','placeholder'=>'Email')); ?>
<?php echo $form->error($users,'username'); ?>
<?php echo $form->passwordField($users,'password',array('class'=>'textarea required','placeholder'=>'Password')); ?>
<?php echo $form->error($users,'password'); ?>
<?php echo $form->passwordField($users,'ConfirmPassword',array('class'=>'textarea required','placeholder'=>'Confirm Password')); ?>
<?php echo $form->error($users,'ConfirmPassword'); ?><div class="login_butn">
                    	<input type="hidden" value="0" id="validate-users-form" />
    	                <?php echo CHtml::submitButton("Sign Up",array('class'=>'login_butn_submit btn_register')); ?>
                        </div>
                    </div>
                       <!-- Sign Up area End -->  
                         <?php $this->endWidget(); ?>
                        </div> 

                        
                    </div>
                </div>
            </div>


<?php if(Yii::app()->user->hasFlash('success')):?>
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
			<div class="success_icon_outer" ><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/success_icon.png" alt="" /></div>
            <div class="success_text"><span>Email Sent</span><br/>
                <?php echo Yii::app()->user->getFlash('success'); ?>
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
<?php if((Yii::app()->user->hasFlash('loginError') && Yii::app()->user->getFlash('loginError')=='register')|| (isset($_REQUEST['request']) && $_REQUEST['request']==1)){?>
<script type="text/javascript">$(document).ready( function() {$(".right_bar").hide();$(".right_bar_1").show();});</script><?php } ?>


<script type="text/javascript">
<!--popup-->
 $(document).ready( function() {
	$('#forgetPass').click(function(){
		if($('#forget-form-email').val()!=''){
			unloadPopupBox();
			loadPopupBox1();
		}
	});
	$('.popupBoxClose1').click( function() {
		unloadPopMess1();
	});
	//login sign up Function	
		
			$("#hide").click(function(){
				
			$(".right_bar").hide();
			$(".right_bar_1").show();
			});
			$("#show").click(function(){
				$(".right_bar").show();
				$(".right_bar_1").hide();
			});
			

//login sign up Function End
	
	
	
	// When site loaded, load the Popupbox First
     $('.popup').click(function(){ loadPopupBox();});
     $('.popup1').click(function(){ loadPopMess();});
   
        $('.popupBoxClose').click( function() {           
            unloadPopMess(); 
        });
      $('#popupBoxClose').click( function() {           
            unloadPopupBox(); 
        });
       
        $('#container').click( function() {
            
        });

        function unloadPopupBox() {    // TO Unload the Popupbox
            $('#popup_box1').fadeOut("slow");
            $(".popup_container1").css({ // this is just for style       
                "z-index": "-1","height":"auto"
            });
        }
		function loadPopupBox1() {    // To Load the Popupbox
            $('#popup_box2').fadeIn("slow");
            $(".popup_container2").css({ // this is just for style
                "z-index": "99","height":"100%" 
            });        
        }
        function loadPopupBox() {    // To Load the Popupbox
            $('#popup_box1').fadeIn("slow");
            $(".popup_container1").css({ // this is just for style
                "z-index": "99","height":"100%" 
            });        
        }  
     
		function unloadPopMess1() {    // TO Unload the Popupbox
			$('#popup_box2').fadeOut("slow");
			$("#popup_container2").css({"z-index": "-1","height":"auto"});
		}
		function unloadPopMess() {    // TO Unload the Popupbox
			$('.mess_popup').fadeOut("slow");
			$(".mess_popup_container").css({"z-index": "-1","height":"auto"});
		}
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