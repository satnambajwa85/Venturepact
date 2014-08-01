<?php
/* @var $this OpenSourceController */
/* @var $model OpenSource */

$this->breadcrumbs=array(
	'Open Sources'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OpenSource', 'url'=>array('index')),
	array('label'=>'Create OpenSource', 'url'=>array('create')),
	array('label'=>'View OpenSource', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage OpenSource', 'url'=>array('admin')),
);
?>

<h1>Update OpenSource <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>