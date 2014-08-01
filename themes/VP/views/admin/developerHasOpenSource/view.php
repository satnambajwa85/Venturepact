<?php
/* @var $this DeveloperHasOpenSourceController */
/* @var $model DeveloperHasOpenSource */

$this->breadcrumbs=array(
	'Developer Has Open Sources'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DeveloperHasOpenSource', 'url'=>array('index')),
	array('label'=>'Create DeveloperHasOpenSource', 'url'=>array('create')),
	array('label'=>'Update DeveloperHasOpenSource', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DeveloperHasOpenSource', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DeveloperHasOpenSource', 'url'=>array('admin')),
);
?>

<h1>View DeveloperHasOpenSource #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'developer_id',
		'open_source_id',
		'project_name',
		'details',
		'link',
		'status',
	),
)); ?>
