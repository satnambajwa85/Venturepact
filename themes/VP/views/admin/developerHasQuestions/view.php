<?php
/* @var $this DeveloperHasQuestionsController */
/* @var $model DeveloperHasQuestions */

$this->breadcrumbs=array(
	'Developer Has Questions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DeveloperHasQuestions', 'url'=>array('index')),
	array('label'=>'Create DeveloperHasQuestions', 'url'=>array('create')),
	array('label'=>'Update DeveloperHasQuestions', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DeveloperHasQuestions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DeveloperHasQuestions', 'url'=>array('admin')),
);
?>

<h1>View DeveloperHasQuestions #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'developer_id',
		'questions_id',
		'url',
		'id',
	),
)); ?>
