<div class="qus_box_outer">
    <div class="qus_box">
    	<center><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/footer_project_active.png"></center>
        <div class="block_content">
            
<?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="alert-box success"><span>success: </span><?php echo Yii::app()->user->getFlash('success'); ?></div>
<?php endif; ?>
<?php if(Yii::app()->user->hasFlash('error')):?>
    <div class="alert-box error"> <span>error: </span><?php echo Yii::app()->user->getFlash('error'); ?></div>
<?php endif; ?>
            
			<?php $form=$this->beginWidget('CActiveForm', array('enableAjaxValidation'=>false,)); ?>
				
			<p>
					<label> In what capacity have you worked with or witnessed <?php echo $name;?>'s work? Can you tell us about your experience working with <?php echo $name;?>?</label> <br/><br/>
				  <?php echo $form->textarea($model,'comments',array('placeholder'=>"Comments",  'class'=>"size_textarea")); ?>
<?php echo $form->error($model,'comments'); ?>                       
                 <?php echo $form->hiddenField($model,'id'); ?>
			</p>
				<p>
					<label> Can you talk about <?php echo $name;?>'s technical skills and why you believe he or she is great?</label> <br/><br/>
					 <?php echo $form->textarea($model,'technical_comments',array('placeholder'=>"Comments",  'class'=>"size_textarea")); ?>
<?php echo $form->error($model,'technical_comments'); ?>   
				</p>
				<p>
					<?php echo CHtml::submitButton('Submit',array('class'=>'submit right set_butn')); ?>
                    </p><div class="clearfix"></div>
				<p></p>
			<?php $this->endWidget(); ?>
		</div>	
	</div>	
    <div class="links">
        <div class="right"> <a href="<?php echo Yii::app()->createAbsoluteUrl('/site/login');?>"><b> Sign up </b> for an account! </a></div>
        <div class="left"> <a href="<?php echo Yii::app()->createAbsoluteUrl('/site');?>"> << Back to Home  </a></div>
    </div>	
 
</div>