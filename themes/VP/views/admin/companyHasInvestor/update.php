<?php
/* @var $this CompanyHasInvestorController */
/* @var $model CompanyHasInvestor */

$this->breadcrumbs=array(
	'Company Has Investors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CompanyHasInvestor', 'url'=>array('index')),
	array('label'=>'Create CompanyHasInvestor', 'url'=>array('create')),
	array('label'=>'View CompanyHasInvestor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CompanyHasInvestor', 'url'=>array('admin')),
);
?>

<h1>Update CompanyHasInvestor <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>