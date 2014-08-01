<?php
/* @var $this CompanyHasDeveloperController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Company Has Developers',
);

$this->menu=array(
	array('label'=>'Create CompanyHasDeveloper', 'url'=>array('create')),
	array('label'=>'Manage CompanyHasDeveloper', 'url'=>array('admin')),
);
?>

<h1>Company Has Developers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
