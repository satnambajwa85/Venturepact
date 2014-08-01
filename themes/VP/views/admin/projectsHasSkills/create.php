<?php
/* @var $this ProjectsHasSkillsController */
/* @var $model ProjectsHasSkills */

$this->breadcrumbs=array(
	'Projects Has Skills'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProjectsHasSkills', 'url'=>array('index')),
	array('label'=>'Manage ProjectsHasSkills', 'url'=>array('admin')),
);
?>

<h1>Create ProjectsHasSkills</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>