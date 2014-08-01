<?php
/* @var $this DayslotController */
/* @var $model Dayslot */

$this->breadcrumbs=array(
	'Dayslots'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dayslot', 'url'=>array('index')),
	array('label'=>'Manage Dayslot', 'url'=>array('admin')),
);
?>

<h1>Create Dayslot</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>