<?php
/* @var $this DeveloperHasSkillsController */
/* @var $model DeveloperHasSkills */

$this->breadcrumbs=array(
	'Developer Has Skills'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DeveloperHasSkills', 'url'=>array('index')),
	array('label'=>'Create DeveloperHasSkills', 'url'=>array('create')),
	array('label'=>'View DeveloperHasSkills', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DeveloperHasSkills', 'url'=>array('admin')),
);
?>

<h1>Update DeveloperHasSkills <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>