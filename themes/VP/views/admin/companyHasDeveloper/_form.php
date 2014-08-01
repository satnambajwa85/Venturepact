<?php
/* @var $this CompanyHasDeveloperController */
/* @var $model CompanyHasDeveloper */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'company-has-developer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'company_id'); ?>
		<?php echo $form->dropDownList($model,'company_id',CHtml::listData(Company::model()->findAll(),'id','name')); ?>
		<?php echo $form->error($model,'company_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'developer_id'); ?>
		<?php echo $form->dropDownList($model,'developer_id',CHtml::listData(Developer::model()->findAll(),'id','first_name')); ?>
		<?php echo $form->error($model,'developer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'schedule_date'); ?>
		<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
            $this->widget('CJuiDateTimePicker',array(
                'model'=>$model, //Model object
                'attribute'=>'schedule_date', //attribute name
                'mode'=>'date', //use "time","date" or "datetime" (default)
                'options'=>array("dateFormat"=>'yy/mm/dd','changeYear'=>true,'changeMonth'=>true,'maxDate' => date('Y-m-d')), 			 
                 'language' => ''
            ));
        ?>
		<?php echo $form->error($model,'schedule_date'); ?>
	 </div>

	<div class="row">
		<?php echo $form->labelEx($model,'timeslot_id'); ?>
		<?php echo $form->dropDownList($model,'timeslot_id',CHtml::listData(Timeslot::model()->findAll(),'id','start_time')); ?>
		<?php echo $form->error($model,'timeslot_id'); ?>
	</div>

	 

	<div class="row">
		<?php echo $form->labelEx($model,'status_id'); ?>
		<?php echo $form->dropDownList($model,'status_id',CHtml::listData(Status::model()->findAll(),'id','name')); ?>
		<?php echo $form->error($model,'status_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->