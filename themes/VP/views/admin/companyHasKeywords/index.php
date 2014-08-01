<?php
/* @var $this CompanyHasKeywordsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Company Has Keywords',
);

$this->menu=array(
	array('label'=>'Create CompanyHasKeywords', 'url'=>array('create')),
	array('label'=>'Manage CompanyHasKeywords', 'url'=>array('admin')),
);
?>

<h1>Company Has Keywords</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
