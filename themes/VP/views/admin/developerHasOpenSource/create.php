<?php
/* @var $this DeveloperHasOpenSourceController */
/* @var $model DeveloperHasOpenSource */

$this->breadcrumbs=array(
	'Developer Has Open Sources'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DeveloperHasOpenSource', 'url'=>array('index')),
	array('label'=>'Manage DeveloperHasOpenSource', 'url'=>array('admin')),
);
?>

<h1>Create DeveloperHasOpenSource</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>