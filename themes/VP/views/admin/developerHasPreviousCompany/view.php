<?php
/* @var $this DeveloperHasPreviousCompanyController */
/* @var $model DeveloperHasPreviousCompany */

$this->breadcrumbs=array(
	'Developer Has Previous Companies'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DeveloperHasPreviousCompany', 'url'=>array('index')),
	array('label'=>'Create DeveloperHasPreviousCompany', 'url'=>array('create')),
	array('label'=>'Update DeveloperHasPreviousCompany', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DeveloperHasPreviousCompany', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DeveloperHasPreviousCompany', 'url'=>array('admin')),
);
?>

<h1>View DeveloperHasPreviousCompany #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'developer_id',
		'previous_company_id',
		'id',
		'role',
		'start_time',
		'end_time',
		'link',
		'description',
		'status',
	),
)); ?>
