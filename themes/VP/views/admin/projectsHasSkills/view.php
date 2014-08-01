<?php
/* @var $this ProjectsHasSkillsController */
/* @var $model ProjectsHasSkills */

$this->breadcrumbs=array(
	'Projects Has Skills'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProjectsHasSkills', 'url'=>array('index')),
	array('label'=>'Create ProjectsHasSkills', 'url'=>array('create')),
	array('label'=>'Update ProjectsHasSkills', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProjectsHasSkills', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProjectsHasSkills', 'url'=>array('admin')),
);
?>

<h1>View ProjectsHasSkills #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'projects_id',
		'skills_id',
		'id',
	),
)); ?>
