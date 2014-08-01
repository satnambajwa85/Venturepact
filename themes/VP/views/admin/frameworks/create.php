<?php
/* @var $this FrameworksController */
/* @var $model Frameworks */

$this->breadcrumbs=array(
	'Frameworks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Frameworks', 'url'=>array('index')),
	array('label'=>'Manage Frameworks', 'url'=>array('admin')),
);
?>

<h1>Create Frameworks</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>