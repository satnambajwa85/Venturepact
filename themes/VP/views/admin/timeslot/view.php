<?php
/* @var $this TimeslotController */
/* @var $model Timeslot */

$this->breadcrumbs=array(
	'Timeslots'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Timeslot', 'url'=>array('index')),
	array('label'=>'Create Timeslot', 'url'=>array('create')),
	array('label'=>'Update Timeslot', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Timeslot', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Timeslot', 'url'=>array('admin')),
);
?>

<h1>View Timeslot #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'start_time',
		'end_time',
		'status',
		'Dayslot_id',
		'add_date',
	),
)); ?>
