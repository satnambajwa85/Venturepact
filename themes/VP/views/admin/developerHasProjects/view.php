<?php
/* @var $this DeveloperHasProjectsController */
/* @var $model DeveloperHasProjects */

$this->breadcrumbs=array(
	'Developer Has Projects'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DeveloperHasProjects', 'url'=>array('index')),
	array('label'=>'Create DeveloperHasProjects', 'url'=>array('create')),
	array('label'=>'Update DeveloperHasProjects', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DeveloperHasProjects', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DeveloperHasProjects', 'url'=>array('admin')),
);
?>

<h1>View DeveloperHasProjects #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'developer_id',
		'projects_id',
	),
)); ?>
