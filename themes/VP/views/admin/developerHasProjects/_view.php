<?php
/* @var $this DeveloperHasProjectsController */
/* @var $data DeveloperHasProjects */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('developer_id')); ?>:</b>
	<?php echo CHtml::encode($data->developer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projects_id')); ?>:</b>
	<?php echo CHtml::encode($data->projects_id); ?>
	<br />


</div>