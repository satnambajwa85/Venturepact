<?php
/* @var $this DeveloperHasSkillsController */
/* @var $model DeveloperHasSkills */

$this->breadcrumbs=array(
	'Developer Has Skills'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DeveloperHasSkills', 'url'=>array('index')),
	array('label'=>'Manage DeveloperHasSkills', 'url'=>array('admin')),
);
?>

<h1>Create DeveloperHasSkills</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>