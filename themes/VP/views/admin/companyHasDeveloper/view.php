<?php
/* @var $this CompanyHasDeveloperController */
/* @var $model CompanyHasDeveloper */

$this->breadcrumbs=array(
	'Company Has Developers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CompanyHasDeveloper', 'url'=>array('index')),
	array('label'=>'Create CompanyHasDeveloper', 'url'=>array('create')),
	array('label'=>'Update CompanyHasDeveloper', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CompanyHasDeveloper', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CompanyHasDeveloper', 'url'=>array('admin')),
);
?>

<h1>View CompanyHasDeveloper #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'company_id',
		'developer_id',
		'timeslot_id',
		'schedule_date',
		'add_date',
		'modification_date',
		'status_id',
	),
)); ?>
