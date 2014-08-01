<?php
/* @var $this DeveloperHasSkillsController */
/* @var $model DeveloperHasSkills */

$this->breadcrumbs=array(
	'Developer Has Skills'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DeveloperHasSkills', 'url'=>array('index')),
	array('label'=>'Create DeveloperHasSkills', 'url'=>array('create')),
	array('label'=>'Update DeveloperHasSkills', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DeveloperHasSkills', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DeveloperHasSkills', 'url'=>array('admin')),
);
?>

<h1>View DeveloperHasSkills #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'developer_id',
		'skills_id',
		'rateing',
	),
)); ?>
