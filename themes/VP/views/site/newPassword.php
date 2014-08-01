<div class="login_page">
    

<div class="login_box">
     <center><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/footer_project_active.png"></center>
        <div class="block_content">
			<div id="resetPassword_message"></div>
			<?php $form=$this->beginWidget('CActiveForm', array('enableAjaxValidation'=>false,)); ?>
<?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="alert-box success"><span>success: </span><?php echo Yii::app()->user->getFlash('success'); ?></div>
<?php endif; ?>
<?php if(Yii::app()->user->hasFlash('error')):?>
    <div class="alert-box error"> <span>error: </span><?php echo Yii::app()->user->getFlash('error'); ?></div>
<?php endif; ?>
				<p>
					<?php echo $form->passwordField($model,'new_password',array('placeholder'=>"New Password",  'class'=>"text")); ?>
<?php echo $form->error($model,'new_password'); ?>
				</p>
				<p>
<?php echo $form->passwordField($model,'confirm_password',array('placeholder'=>"Confirm Password",  'class'=>"text")); ?>
<?php echo $form->error($model,'confirm_password'); ?>
				</p>
				<p>
					<?php echo CHtml::submitButton('Set Password',array('class'=>'submit right set_butn')); ?>
                    
                    </p><div class="clearfix"></div>
				<p></p>
			<?php $this->endWidget(); ?>
		</div>	
	</div>	
    <div class="links">
        <div class="right"> <a href="<?php echo Yii::app()->createAbsoluteUrl('/site/login');?>" style="text-decoration:none" ><b> Sign up </b> for an account! </a></div>
        <div class="left"> <a href="<?php echo Yii::app()->createAbsoluteUrl('/site');?>" style="text-decoration:none"> << Back to Home</a></div>
    </div>
</div>