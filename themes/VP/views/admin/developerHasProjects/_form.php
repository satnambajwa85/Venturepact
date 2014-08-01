<?php
/* @var $this DeveloperHasProjectsController */
/* @var $model DeveloperHasProjects */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'developer-has-projects-form',
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
		<?php echo $form->labelEx($model,'projects_id'); ?>
		<?php echo $form->textField($model,'projects_id'); ?>
		<?php echo $form->error($model,'projects_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->