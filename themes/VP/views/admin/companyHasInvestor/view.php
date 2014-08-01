<?php
/* @var $this CompanyHasInvestorController */
/* @var $model CompanyHasInvestor */

$this->breadcrumbs=array(
	'Company Has Investors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CompanyHasInvestor', 'url'=>array('index')),
	array('label'=>'Create CompanyHasInvestor', 'url'=>array('create')),
	array('label'=>'Update CompanyHasInvestor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CompanyHasInvestor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CompanyHasInvestor', 'url'=>array('admin')),
);
?>

<h1>View CompanyHasInvestor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'company_id',
		'Investor_id',
		'share',
		'status',
	),
)); ?>
