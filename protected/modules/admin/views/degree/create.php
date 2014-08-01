<?php
/* @var $this DegreeController */
/* @var $model Degree */

$this->breadcrumbs=array(
	'Degrees'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Degree', 'url'=>array('index')),
	array('label'=>'Manage Degree', 'url'=>array('admin')),
);
?>

<h1>Create Degree</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>