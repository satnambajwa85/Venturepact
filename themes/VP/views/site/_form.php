<div class="login_right">
          <div class="form_outer">
          <?php $form=$this->beginWidget('CActiveForm', array('id'=>'users-form','enableAjaxValidation'=>false,)); ?>
            <div class="login_text">Register</div>
             <div class="right_inner" >
				<div class="row">
				<?php echo $form->textField($users,'display_name',array('class'=>'text_area','placeholder'=>'Display Name')); ?>
                <?php echo $form->error($users,'display_name'); ?>
                </div>
                <div class="row">
        		<?php echo $form->textField($users,'username',array('class'=>'text_area','placeholder'=>'Username Or Email')); ?>
                <?php echo $form->error($users,'username'); ?>
                </div>
                <div class="row">                
                <?php echo $form->passwordField($users,'password',array('class'=>'text_area','placeholder'=>'Password')); ?>
                <?php echo $form->error($users,'password'); ?>
                </div>
                <div class="row">
                <?php echo $form->passwordField($users,'ConfirmPassword',array('class'=>'text_area','placeholder'=>'Confirm Password')); ?>
                <?php echo $form->error($users,'ConfirmPassword'); ?>
              </div>
              
               <div class="img_text_outer"></div>
               <div class="form_row">
               	<?php echo CHtml::submitButton($users->isNewRecord ? 'Register Now' : 'Save',array('class'=>'button_login')); ?>
              
               </div>
             
             </div>
             <?php $this->endWidget(); ?>
          </div>              
      </div>


