<?php
/* @var $this PreviousCompanyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Previous Companies',
);

$this->menu=array(
	array('label'=>'Create PreviousCompany', 'url'=>array('create')),
	array('label'=>'Manage PreviousCompany', 'url'=>array('admin')),
);
?>

<h1>Previous Companies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
