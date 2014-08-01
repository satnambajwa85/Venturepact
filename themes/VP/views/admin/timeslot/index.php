<?php
/* @var $this TimeslotController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Timeslots',
);

$this->menu=array(
	array('label'=>'Create Timeslot', 'url'=>array('create')),
	array('label'=>'Manage Timeslot', 'url'=>array('admin')),
);
?>

<h1>Timeslots</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
