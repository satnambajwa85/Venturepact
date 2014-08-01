<?php
/* @var $this RecommendationsController */
/* @var $model Recommendations */

$this->breadcrumbs=array(
	'Recommendations'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Recommendations', 'url'=>array('index')),
	array('label'=>'Create Recommendations', 'url'=>array('create')),
	array('label'=>'View Recommendations', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Recommendations', 'url'=>array('admin')),
);
?>

<h1>Update Recommendations <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>