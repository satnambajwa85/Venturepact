<script> $(window).load(function(){$("#click_test").hide(2000);}</script>
<!-- content outer  -->
<div class="dashprofile_content">
    <div class="dashprofile_content_inner">
        <div class="dashprofile_content_inner_main">
            <!-- dashpro left start-->
            <div class="dashpro_left">
                <div class="dashpro_left_box active">
                    <div class="dashpro_left_box_main">
                        <div class="dashpro_img">
                            <?php echo CHtml::link('<img src="'.Yii::app()->theme->baseUrl.'/images/dashboard_profile1.png" alt="edit profile" border="0" />',array('/user')); ?>                            
                        </div>
                        <div class="dashpro_title ">Profile</div>
                    </div>
                    <div class="dashpro_edit">
                   
                    </div>
                </div>
                <div class="dashpro_left_box border_b">
                    <div class="dashpro_left_box_main">
                        <div class="dashpro_img">
                            <?php echo CHtml::link('<img src="'.Yii::app()->theme->baseUrl.'/images/a1.png" alt="jobs" border="0" />',array('/user/jobs')); ?>
                        </div>
                        <div class="dashpro_title">Jobs</div>
                    </div>
                </div>
                 <div class="dashpro_left_box">
                    <div class="dashpro_left_box_main">
                        <div class="dashpro_img">
                           <?php echo CHtml::link('<img src="'.Yii::app()->theme->baseUrl.'/images/a3.png" alt="jobs" border="0" />',array('/user/status'));?>
                        </div>
                        <div class="dashpro_title">Status</div>
                    </div>
                </div>
            </div>
            <!-- dashpro left end -->            
            <!-- dashpro right start -->
            <div class="dashpro_right">

<?php $form=$this->beginWidget('CActiveForm', array('enableAjaxValidation'=>false,)); ?>
                <!-- dashpro right-form start -->
                <div class="dashpro_right_form">
                    <div class="pass_outer">
                        <div class="pass_main_header ">Change Password</div>
<?php if(Yii::app()->user->hasFlash('success')):?>
    <div id="click_test" class="alert-box success"><span>success: </span><?php echo Yii::app()->user->getFlash('success'); ?></div>
<?php endif; ?>
                        <div class="change_pass">
<?php echo $form->passwordField($changePassword,'current_password',array('placeholder'=>"Current Password",  'class'=>"textarea")); ?>
<?php if(Yii::app()->user->hasFlash('error')):?><div class="errorMessage"><?php echo Yii::app()->user->getFlash('error'); ?></div><?php endif; ?>

<?php echo $form->error($changePassword,'current_password'); ?>

<?php echo $form->passwordField($changePassword,'new_password',array('placeholder'=>"New Password",  'class'=>"textarea")); ?>
<?php echo $form->error($changePassword,'new_password'); ?>

<?php echo $form->passwordField($changePassword,'confirm_password',array('placeholder'=>"Confirm Password",  'class'=>"textarea")); ?>
<?php echo $form->error($changePassword,'confirm_password'); ?>

<?php echo CHtml::submitButton('Save',array('class'=>'button changePass')); ?>
						</div>
                       
					</div>
				</div>
<?php $this->endWidget(); ?>
                </div>
                
            </div>
            
    </div>
</div> 