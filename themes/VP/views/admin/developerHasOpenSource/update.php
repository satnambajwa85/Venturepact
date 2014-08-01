<?php
/* @var $this DeveloperHasOpenSourceController */
/* @var $model DeveloperHasOpenSource */

$this->breadcrumbs=array(
	'Developer Has Open Sources'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DeveloperHasOpenSource', 'url'=>array('index')),
	array('label'=>'Create DeveloperHasOpenSource', 'url'=>array('create')),
	array('label'=>'View DeveloperHasOpenSource', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DeveloperHasOpenSource', 'url'=>array('admin')),
);
?>

<h1>Update DeveloperHasOpenSource <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>