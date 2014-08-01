<?php
/* @var $this CompanyHasKeywordsController */
/* @var $model CompanyHasKeywords */

$this->breadcrumbs=array(
	'Company Has Keywords'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CompanyHasKeywords', 'url'=>array('index')),
	array('label'=>'Create CompanyHasKeywords', 'url'=>array('create')),
	array('label'=>'Update CompanyHasKeywords', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CompanyHasKeywords', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CompanyHasKeywords', 'url'=>array('admin')),
);
?>

<h1>View CompanyHasKeywords #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'company_id',
		'keywords_id',
		'id',
		'status',
	),
)); ?>
