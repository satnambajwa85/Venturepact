<?php
/* @var $this SkillCategoryController */
/* @var $model SkillCategory */

$this->breadcrumbs=array(
	'Skill Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SkillCategory', 'url'=>array('index')),
	array('label'=>'Manage SkillCategory', 'url'=>array('admin')),
);
?>

<h1>Create SkillCategory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>