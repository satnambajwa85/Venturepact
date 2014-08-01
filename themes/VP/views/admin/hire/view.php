<?php
/* @var $this HireController */
/* @var $model Hire */

$this->breadcrumbs=array(
	'Hires'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Hire', 'url'=>array('index')),
	array('label'=>'Create Hire', 'url'=>array('create')),
	array('label'=>'Update Hire', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Hire', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hire', 'url'=>array('admin')),
);
?>

<h1>View Hire #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'email',
		'company_name',
		'phone',
		'website',
		'when_can_talk',
		'status',
		'add_date',
	),
)); ?>
