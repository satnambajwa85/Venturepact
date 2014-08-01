<?php
/* @var $this FrameworksController */
/* @var $model Frameworks */

$this->breadcrumbs=array(
	'Frameworks'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Frameworks', 'url'=>array('index')),
	array('label'=>'Create Frameworks', 'url'=>array('create')),
	array('label'=>'Update Frameworks', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Frameworks', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Frameworks', 'url'=>array('admin')),
);
?>

<h1>View Frameworks #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
		'status',
		'skills_id',
	),
)); ?>
