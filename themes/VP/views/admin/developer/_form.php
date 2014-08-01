<?php
/* @var $this DeveloperController */
/* @var $model Developer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'developer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'users_id'); ?>
		<?php echo $form->dropDownList($model,'users_id',CHtml::listData(Users::model()->findAll(),'id','display_name')); ?>
		<?php echo $form->error($model,'users_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'skype_name'); ?>
		<?php echo $form->textField($model,'skype_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'skype_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alternative_email'); ?>
		<?php echo $form->textField($model,'alternative_email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'alternative_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dob'); ?>
        <?php echo $form->textField($model,'dob'); ?>
				<?php /*Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
            $this->widget('CJuiDateTimePicker',array(
                'model'=>$model, //Model object
                'attribute'=>'dob', //attribute name
                'mode'=>'date', //use "time","date" or "datetime" (default)
                'options'=>array("dateFormat"=>'yy/mm/dd','changeYear'=>true,'changeMonth'=>true,'maxDate' => date('Y-m-d')), // jquery plugin options
		
                'language' => ''
            ));*/?>

		<?php echo $form->error($model,'dob'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address1'); ?>
		<?php echo $form->textField($model,'address1',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'address1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address2'); ?>
		<?php echo $form->textField($model,'address2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'address2'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'country_id'); ?>
	<?php  $countryList	= Country::model()->findAll();
  			$list = CHtml::listData($countryList, 'country_id', 'name');
			echo $form->dropDownList($model, 'country_id', $list,array('empty'=>'Select a Country',
                        'ajax' => array(
                        'type' => 'POST',
                        'url' => CController::createUrl('/site/dynamicCity'),
                        'update' => "#Developer_state_id"
                    ) ));
?>
 		<?php echo $form->error($model,'country_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state_id'); ?>
		<?php echo $form->dropDownList($model,'state_id',CHtml::listData(state::model()->findAll(),'id','name'));?>
		<?php echo $form->error($model,'state_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'pincode'); ?>
		<?php echo $form->textField($model,'pincode',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'pincode'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'time_zone_id'); ?>
		<?php echo $form->dropDownList($model,'time_zone_id',CHtml::listData(timezone::model()->findAll(),'id','zone_value'));?>
		<?php echo $form->error($model,'time_zone_id'); ?>
	</div>
    <div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',array(0=>'Not Submitted',1=>'Submitted',2=>'Verifired')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->