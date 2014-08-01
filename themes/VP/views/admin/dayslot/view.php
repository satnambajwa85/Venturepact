<?php
/* @var $this DayslotController */
/* @var $model Dayslot */

$this->breadcrumbs=array(
	'Dayslots'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Dayslot', 'url'=>array('index')),
	array('label'=>'Create Dayslot', 'url'=>array('create')),
	array('label'=>'Update Dayslot', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Dayslot', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dayslot', 'url'=>array('admin')),
);
?>

<h1>View Dayslot #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'day',
		'status',
		'company_id',
		'add_date',
	),
)); ?>
