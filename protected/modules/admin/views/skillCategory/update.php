<?php
/* @var $this SkillCategoryController */
/* @var $model SkillCategory */

$this->breadcrumbs=array(
	'Skill Categories'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SkillCategory', 'url'=>array('index')),
	array('label'=>'Create SkillCategory', 'url'=>array('create')),
	array('label'=>'View SkillCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SkillCategory', 'url'=>array('admin')),
);
?>

<h1>Update SkillCategory <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>