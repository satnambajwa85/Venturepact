<?php
/* @var $this CompanyHasInvestorController */
/* @var $model CompanyHasInvestor */

$this->breadcrumbs=array(
	'Company Has Investors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CompanyHasInvestor', 'url'=>array('index')),
	array('label'=>'Manage CompanyHasInvestor', 'url'=>array('admin')),
);
?>

<h1>Create CompanyHasInvestor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>