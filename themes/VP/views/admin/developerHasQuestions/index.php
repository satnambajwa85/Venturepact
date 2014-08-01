<?php
/* @var $this DeveloperHasQuestionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Developer Has Questions',
);

$this->menu=array(
	array('label'=>'Create DeveloperHasQuestions', 'url'=>array('create')),
	array('label'=>'Manage DeveloperHasQuestions', 'url'=>array('admin')),
);
?>

<h1>Developer Has Questions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
