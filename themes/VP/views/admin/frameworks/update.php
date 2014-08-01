<?php
/* @var $this FrameworksController */
/* @var $model Frameworks */

$this->breadcrumbs=array(
	'Frameworks'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Frameworks', 'url'=>array('index')),
	array('label'=>'Create Frameworks', 'url'=>array('create')),
	array('label'=>'View Frameworks', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Frameworks', 'url'=>array('admin')),
);
?>

<h1>Update Frameworks <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>