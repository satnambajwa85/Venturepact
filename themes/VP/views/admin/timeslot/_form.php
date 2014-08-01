<?php
/* @var $this TimeslotController */
/* @var $model Timeslot */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'timeslot-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
		<?php  $companyList	= Company::model()->findAll();
  			$list = CHtml::listData($companyList, 'id', 'name');
			echo $form->dropDownList($model, 'company_id', $list,array('empty'=>'Select a Company',
                        'ajax' => array(
                        'type' => 'POST',
                        'url' => CController::createUrl('timeslot/dynamicCompany'),
                        'update' => "#Timeslot_Dayslot_id"
                    ) ));
?>
 	
	<div class="row">
		<?php echo $form->labelEx($model,'Dayslot_id'); ?>
		<?php echo $form->dropDownList($model,'Dayslot_id',CHtml::listData(Dayslot::model()->findAll(),'id','day')); ?>
		<?php echo $form->error($model,'Dayslot_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start_time'); ?>
		<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
            $this->widget('CJuiDateTimePicker',array(
                'model'=>$model, //Model object
                'attribute'=>'start_time', //attribute name
                'mode'=>'time', //use "time","date" or "datetime" (default)
                'options'=>array("timeFormat"=>'hh:mm'), // jquery plugin options
				 
                 'language' => ''
            ));
        ?>
		<?php echo $form->error($model,'start_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_time'); ?>
<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
            $this->widget('CJuiDateTimePicker',array(
                'model'=>$model, //Model object
                'attribute'=>'end_time', //attribute name
                'mode'=>'time', //use "time","date" or "datetime" (default)
                'options'=>array("timeFormat"=>'hh:mm'), // jquery plugin options
				 
                 'language' => ''
            ));
        ?>		<?php echo $form->error($model,'end_time'); ?>
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