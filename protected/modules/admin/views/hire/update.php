<?php
/* @var $this HireController */
/* @var $model Hire */

$this->breadcrumbs=array(
	'Hires'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hire', 'url'=>array('index')),
	array('label'=>'Create Hire', 'url'=>array('create')),
	array('label'=>'View Hire', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Hire', 'url'=>array('admin')),
);
?>

<h1>Update Hire <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>