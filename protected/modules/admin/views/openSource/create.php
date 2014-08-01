<?php
/* @var $this OpenSourceController */
/* @var $model OpenSource */

$this->breadcrumbs=array(
	'Open Sources'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OpenSource', 'url'=>array('index')),
	array('label'=>'Manage OpenSource', 'url'=>array('admin')),
);
?>

<h1>Create OpenSource</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>