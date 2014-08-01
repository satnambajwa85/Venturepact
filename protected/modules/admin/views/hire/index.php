<?php
/* @var $this HireController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hires',
);

$this->menu=array(
	array('label'=>'Create Hire', 'url'=>array('create')),
	array('label'=>'Manage Hire', 'url'=>array('admin')),
);
?>

<h1>Hires</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
