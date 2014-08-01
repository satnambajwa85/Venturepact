<?php
/* @var $this ProjectsHasSkillsController */
/* @var $model ProjectsHasSkills */

$this->breadcrumbs=array(
	'Projects Has Skills'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProjectsHasSkills', 'url'=>array('index')),
	array('label'=>'Create ProjectsHasSkills', 'url'=>array('create')),
	array('label'=>'View ProjectsHasSkills', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProjectsHasSkills', 'url'=>array('admin')),
);
?>

<h1>Update ProjectsHasSkills <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>