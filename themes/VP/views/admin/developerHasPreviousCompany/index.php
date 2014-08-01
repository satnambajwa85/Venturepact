<?php
/* @var $this DeveloperHasPreviousCompanyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Developer Has Previous Companies',
);

$this->menu=array(
	array('label'=>'Create DeveloperHasPreviousCompany', 'url'=>array('create')),
	array('label'=>'Manage DeveloperHasPreviousCompany', 'url'=>array('admin')),
);
?>

<h1>Developer Has Previous Companies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
