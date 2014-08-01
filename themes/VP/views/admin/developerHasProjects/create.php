<?php
/* @var $this DeveloperHasProjectsController */
/* @var $model DeveloperHasProjects */

$this->breadcrumbs=array(
	'Developer Has Projects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DeveloperHasProjects', 'url'=>array('index')),
	array('label'=>'Manage DeveloperHasProjects', 'url'=>array('admin')),
);
?>

<h1>Create DeveloperHasProjects</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>