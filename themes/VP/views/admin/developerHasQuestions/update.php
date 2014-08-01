<?php
/* @var $this DeveloperHasQuestionsController */
/* @var $model DeveloperHasQuestions */

$this->breadcrumbs=array(
	'Developer Has Questions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DeveloperHasQuestions', 'url'=>array('index')),
	array('label'=>'Create DeveloperHasQuestions', 'url'=>array('create')),
	array('label'=>'View DeveloperHasQuestions', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DeveloperHasQuestions', 'url'=>array('admin')),
);
?>

<h1>Update DeveloperHasQuestions <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>