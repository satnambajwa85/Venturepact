<?php
/* @var $this DeveloperHasQuestionsController */
/* @var $model DeveloperHasQuestions */

$this->breadcrumbs=array(
	'Developer Has Questions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DeveloperHasQuestions', 'url'=>array('index')),
	array('label'=>'Manage DeveloperHasQuestions', 'url'=>array('admin')),
);
?>

<h1>Create DeveloperHasQuestions</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>