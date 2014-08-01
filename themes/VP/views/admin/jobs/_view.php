<?php
/* @var $this JobsController */
/* @var $data Jobs */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salary_start')); ?>:</b>
	<?php echo CHtml::encode($data->salary_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salary_end')); ?>:</b>
	<?php echo CHtml::encode($data->salary_end); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('share_start')); ?>:</b>
	<?php echo CHtml::encode($data->share_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('share_end')); ?>:</b>
	<?php echo CHtml::encode($data->share_end); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('add_date')); ?>:</b>
	<?php echo CHtml::encode($data->add_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_mode_id')); ?>:</b>
	<?php echo CHtml::encode($data->job_mode_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	*/ ?>

</div>