<?php
/* @var $this DeveloperHasOpenSourceController */
/* @var $model DeveloperHasOpenSource */
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
		<?php echo $form->label($model,'open_source_id'); ?>
		<?php echo $form->textField($model,'open_source_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'project_name'); ?>
		<?php echo $form->textField($model,'project_name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'details'); ?>
		<?php echo $form->textField($model,'details',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'link'); ?>
		<?php echo $form->textField($model,'link',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->