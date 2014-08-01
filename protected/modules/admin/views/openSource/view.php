<?php
/* @var $this OpenSourceController */
/* @var $model OpenSource */

$this->breadcrumbs=array(
	'Open Sources'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List OpenSource', 'url'=>array('index')),
	array('label'=>'Create OpenSource', 'url'=>array('create')),
	array('label'=>'Update OpenSource', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete OpenSource', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OpenSource', 'url'=>array('admin')),
);
?>

<h1>View OpenSource #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'link',
		'details',
		'status',
	),
)); ?>
