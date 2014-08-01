<?php
/* @var $this CompanyController */
/* @var $model Company */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'company-form',
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
		<?php echo $form->labelEx($model,'users_id'); ?>
		<?php echo $form->dropDownList($model,'users_id',CHtml::listData(Users::model()->findAll(),'id','display_name')); ?>
		<?php echo $form->error($model,'users_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'logo'); ?>
		<?php echo $form->fileField($model, 'logo');?>
        <?php if(isset($model->logo)){
                echo $form->hiddenField($model, 'logo');
        }?>
		<?php echo $form->error($model,'logo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description'); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'language_id'); ?>
	<?php echo $form->dropDownList($model,'language_id',CHtml::listData(Language::model()->findAll(),'id','name')); ?>
		<?php echo $form->error($model,'language_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'team_size'); ?>
		<?php echo $form->textField($model,'team_size'); ?>
		<?php echo $form->error($model,'team_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'turnover'); ?>
		<?php echo $form->textField($model,'turnover',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'turnover'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country_id'); ?>
		 <?php  $countryList	= Country::model()->findAll();
  			$list = CHtml::listData($countryList, 'country_id', 'name');
			echo $form->dropDownList($model, 'country_id', $list,array('empty'=>'Select a Country',
                        'ajax' => array(
                        'type' => 'POST',
                        'url' => CController::createUrl('/site/dynamicCity'),
                        'update' => "#Company_state_id"
                    ) ));
	?>
 	 		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state_id'); ?>
		<?php echo $form->dropDownList($model,'state_id',CHtml::listData(State::model()->findAll(),'id','name')); ?>
		<?php echo $form->error($model,'state_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_zone_id'); ?>
		<?php echo $form->dropDownList($model,'time_zone_id',CHtml::listData(Timezone::model()->findAll(),'id','zone_value')); ?>
		<?php echo $form->error($model,'time_zone_id'); ?>
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