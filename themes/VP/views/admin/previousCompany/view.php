<?php
/* @var $this PreviousCompanyController */
/* @var $model PreviousCompany */

$this->breadcrumbs=array(
	'Previous Companies'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List PreviousCompany', 'url'=>array('index')),
	array('label'=>'Create PreviousCompany', 'url'=>array('create')),
	array('label'=>'Update PreviousCompany', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PreviousCompany', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PreviousCompany', 'url'=>array('admin')),
);
?>

<h1>View PreviousCompany #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'logo',
		'description',
		'add_date',
		'status',
	),
)); ?>
