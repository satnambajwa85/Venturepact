<?php
/* @var $this JobModeController */
/* @var $model JobMode */

$this->breadcrumbs=array(
	'Job Modes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobMode', 'url'=>array('index')),
	array('label'=>'Manage JobMode', 'url'=>array('admin')),
);
?>

<h1>Create JobMode</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>