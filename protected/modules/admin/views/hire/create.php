<?php
/* @var $this HireController */
/* @var $model Hire */

$this->breadcrumbs=array(
	'Hires'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hire', 'url'=>array('index')),
	array('label'=>'Manage Hire', 'url'=>array('admin')),
);
?>

<h1>Create Hire</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>