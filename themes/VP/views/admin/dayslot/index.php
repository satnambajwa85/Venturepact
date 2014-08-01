<?php
/* @var $this DayslotController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dayslots',
);

$this->menu=array(
	array('label'=>'Create Dayslot', 'url'=>array('create')),
	array('label'=>'Manage Dayslot', 'url'=>array('admin')),
);
?>

<h1>Dayslots</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
