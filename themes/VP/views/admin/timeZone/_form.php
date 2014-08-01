<?php
/* @var $this TimeZoneController */
/* @var $model TimeZone */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'time-zone-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'zone'); ?>
		<?php echo $form->textField($model,'zone',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'zone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zone_value'); ?>
		<?php echo $form->textField($model,'zone_value',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'zone_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_save_hours'); ?>
		<?php echo $form->textField($model,'time_save_hours',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'time_save_hours'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'add_date'); ?>
		<?php echo $form->textField($model,'add_date'); ?>
		<?php echo $form->error($model,'add_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->