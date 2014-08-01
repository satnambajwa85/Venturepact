<?php
/* @var $this TimeslotController */
/* @var $model Timeslot */

$this->breadcrumbs=array(
	'Timeslots'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Timeslot', 'url'=>array('index')),
	array('label'=>'Manage Timeslot', 'url'=>array('admin')),
);
?>

<h1>Create Timeslot</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>