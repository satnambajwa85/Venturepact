<?php
/* @var $this DeveloperHasProjectsController */
/* @var $model DeveloperHasProjects */

$this->breadcrumbs=array(
	'Developer Has Projects'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DeveloperHasProjects', 'url'=>array('index')),
	array('label'=>'Create DeveloperHasProjects', 'url'=>array('create')),
	array('label'=>'View DeveloperHasProjects', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DeveloperHasProjects', 'url'=>array('admin')),
);
?>

<h1>Update DeveloperHasProjects <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>