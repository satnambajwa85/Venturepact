<?php
/* @var $this JobsController */
/* @var $model Jobs */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jobs-form', 
	 'htmlOptions' => array('enctype' => 'multipart/form-data'),

	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php echo $form->dropDownList($model,'category_id',CHtml::listData(Category::model()->findAll(),'id','name')); ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'job_mode_id'); ?>
		<?php echo $form->dropDownList($model,'job_mode_id',CHtml::listData(JobMode::model()->findAll(),'id','name')); ?>
		<?php echo $form->error($model,'job_mode_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model, 'image');?>
		<?php echo $form->error($model,'image'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salary_start'); ?>
		<?php echo $form->textField($model,'salary_start'); ?>
		<?php echo $form->error($model,'salary_start'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salary_end'); ?>
		<?php echo $form->textField($model,'salary_end'); ?>
		<?php echo $form->error($model,'salary_end'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'unit'); ?>
        <?php echo $form->textField($model,'unit'); ?>
		<?php echo $form->error($model,'unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'share_start'); ?>
		<?php echo $form->textField($model,'share_start'); ?>
		<?php echo $form->error($model,'share_start'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'share_end'); ?>
		<?php echo $form->textField($model,'share_end'); ?>
		<?php echo $form->error($model,'share_end'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->checkBox($model,'status', array('value'=>1, 'uncheckValue'=>0)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->