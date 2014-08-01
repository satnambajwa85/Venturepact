<?php
/* @var $this JobModeController */
/* @var $model JobMode */

$this->breadcrumbs=array(
	'Job Modes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List JobMode', 'url'=>array('index')),
	array('label'=>'Create JobMode', 'url'=>array('create')),
	array('label'=>'Update JobMode', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete JobMode', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobMode', 'url'=>array('admin')),
);
?>

<h1>View JobMode #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'status',
		'date_time',
	),
)); ?>
