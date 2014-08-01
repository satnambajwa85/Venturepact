<?php
/* @var $this DayslotController */
/* @var $model Dayslot */

$this->breadcrumbs=array(
	'Dayslots'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dayslot', 'url'=>array('index')),
	array('label'=>'Create Dayslot', 'url'=>array('create')),
	array('label'=>'View Dayslot', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Dayslot', 'url'=>array('admin')),
);
?>

<h1>Update Dayslot <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>