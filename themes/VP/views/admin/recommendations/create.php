<?php
/* @var $this RecommendationsController */
/* @var $model Recommendations */

$this->breadcrumbs=array(
	'Recommendations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Recommendations', 'url'=>array('index')),
	array('label'=>'Manage Recommendations', 'url'=>array('admin')),
);
?>

<h1>Create Recommendations</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>