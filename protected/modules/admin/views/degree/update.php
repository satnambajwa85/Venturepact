<?php
/* @var $this DegreeController */
/* @var $model Degree */

$this->breadcrumbs=array(
	'Degrees'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Degree', 'url'=>array('index')),
	array('label'=>'Create Degree', 'url'=>array('create')),
	array('label'=>'View Degree', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Degree', 'url'=>array('admin')),
);
?>

<h1>Update Degree <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>