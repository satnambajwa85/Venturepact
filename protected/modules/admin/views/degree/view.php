<?php
/* @var $this DegreeController */
/* @var $model Degree */

$this->breadcrumbs=array(
	'Degrees'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Degree', 'url'=>array('index')),
	array('label'=>'Create Degree', 'url'=>array('create')),
	array('label'=>'Update Degree', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Degree', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Degree', 'url'=>array('admin')),
);
?>

<h1>View Degree #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'add_date',
		'status',
	),
)); ?>
