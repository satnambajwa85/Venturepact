<?php
/* @var $this CompanyHasInvestorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Company Has Investors',
);

$this->menu=array(
	array('label'=>'Create CompanyHasInvestor', 'url'=>array('create')),
	array('label'=>'Manage CompanyHasInvestor', 'url'=>array('admin')),
);
?>

<h1>Company Has Investors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
