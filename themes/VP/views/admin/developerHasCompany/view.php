<?php
/* @var $this DeveloperHasCompanyController */
/* @var $model DeveloperHasCompany */

$this->breadcrumbs=array(
	'Developer Has Companies'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DeveloperHasCompany', 'url'=>array('index')),
	array('label'=>'Create DeveloperHasCompany', 'url'=>array('create')),
	array('label'=>'Update DeveloperHasCompany', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DeveloperHasCompany', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DeveloperHasCompany', 'url'=>array('admin')),
);
?>

<h1>View DeveloperHasCompany #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'developer_id',
		'company_id',
	),
)); ?>
