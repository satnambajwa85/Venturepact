<?php
/* @var $this InvestorController */
/* @var $model Investor */

$this->breadcrumbs=array(
	'Investors'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Investor', 'url'=>array('index')),
	array('label'=>'Create Investor', 'url'=>array('create')),
	array('label'=>'Update Investor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Investor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Investor', 'url'=>array('admin')),
);
?>

<h1>View Investor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'link',
		'contact',
		'status',
		'state_id',
	),
)); ?>
