<?php
/* @var $this InvestorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Investors',
);

$this->menu=array(
	array('label'=>'Create Investor', 'url'=>array('create')),
	array('label'=>'Manage Investor', 'url'=>array('admin')),
);
?>

<h1>Investors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
