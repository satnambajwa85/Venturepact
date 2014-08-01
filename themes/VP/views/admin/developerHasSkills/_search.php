<?php
/* @var $this DeveloperHasSkillsController */
/* @var $model DeveloperHasSkills */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'developer_id'); ?>
		<?php echo $form->textField($model,'developer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'skills_id'); ?>
		<?php echo $form->textField($model,'skills_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rateing'); ?>
		<?php echo $form->textField($model,'rateing',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->