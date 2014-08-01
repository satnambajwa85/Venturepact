<?php
/* @var $this DeveloperHasSkillsController */
/* @var $model DeveloperHasSkills */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'developer-has-skills-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'developer_id'); ?>
		<?php echo $form->textField($model,'developer_id'); ?>
		<?php echo $form->error($model,'developer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'skills_id'); ?>
		<?php echo $form->textField($model,'skills_id'); ?>
		<?php echo $form->error($model,'skills_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rateing'); ?>
		<?php echo $form->textField($model,'rateing',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'rateing'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->