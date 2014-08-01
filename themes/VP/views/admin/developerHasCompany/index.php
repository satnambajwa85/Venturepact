<?php
/* @var $this DeveloperHasCompanyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Developer Has Companies',
);

$this->menu=array(
	array('label'=>'Create DeveloperHasCompany', 'url'=>array('create')),
	array('label'=>'Manage DeveloperHasCompany', 'url'=>array('admin')),
);
?>

<h1>Developer Has Companies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
