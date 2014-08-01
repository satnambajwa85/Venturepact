<?php
/* @var $this ProjectsHasSkillsController */
/* @var $data ProjectsHasSkills */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projects_id')); ?>:</b>
	<?php echo CHtml::encode($data->projects_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('skills_id')); ?>:</b>
	<?php echo CHtml::encode($data->skills_id); ?>
	<br />


</div>