<?php
/* @var $this CompanyHasDeveloperController */
/* @var $data CompanyHasDeveloper */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_id')); ?>:</b>
	<?php echo CHtml::encode($data->company_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('developer_id')); ?>:</b>
	<?php echo CHtml::encode($data->developer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timeslot_id')); ?>:</b>
	<?php echo CHtml::encode($data->timeslot_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schedule_date')); ?>:</b>
	<?php echo CHtml::encode($data->schedule_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('add_date')); ?>:</b>
	<?php echo CHtml::encode($data->add_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modification_date')); ?>:</b>
	<?php echo CHtml::encode($data->modification_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('status_id')); ?>:</b>
	<?php echo CHtml::encode($data->status_id); ?>
	<br />

	*/ ?>

</div>