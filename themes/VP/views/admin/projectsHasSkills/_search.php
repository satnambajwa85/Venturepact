<?php
/* @var $this ProjectsHasSkillsController */
/* @var $model ProjectsHasSkills */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'projects_id'); ?>
		<?php echo $form->textField($model,'projects_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'skills_id'); ?>
		<?php echo $form->textField($model,'skills_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->