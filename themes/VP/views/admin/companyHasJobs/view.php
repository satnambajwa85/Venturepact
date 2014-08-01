<?php
/* @var $this CompanyHasJobsController */
/* @var $model CompanyHasJobs */

$this->breadcrumbs=array(
	'Company Has Jobs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CompanyHasJobs', 'url'=>array('index')),
	array('label'=>'Create CompanyHasJobs', 'url'=>array('create')),
	array('label'=>'Update CompanyHasJobs', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CompanyHasJobs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CompanyHasJobs', 'url'=>array('admin')),
);
?>

<h1>View CompanyHasJobs #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'company_id',
		'jobs_id',
		'add_date',
		'status',
		'is_employe',
	),
)); ?>
