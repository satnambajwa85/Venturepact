<?php
/* @var $this TimeslotController */
/* @var $model Timeslot */

$this->breadcrumbs=array(
	'Timeslots'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Timeslot', 'url'=>array('index')),
	array('label'=>'Create Timeslot', 'url'=>array('create')),
	array('label'=>'View Timeslot', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Timeslot', 'url'=>array('admin')),
);
?>

<h1>Update Timeslot <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>