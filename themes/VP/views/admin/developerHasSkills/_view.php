<?php
/* @var $this DeveloperHasSkillsController */
/* @var $data DeveloperHasSkills */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('developer_id')); ?>:</b>
	<?php echo CHtml::encode($data->developer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('skills_id')); ?>:</b>
	<?php echo CHtml::encode($data->skills_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rateing')); ?>:</b>
	<?php echo CHtml::encode($data->rateing); ?>
	<br />


</div>