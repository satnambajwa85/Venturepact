<?php
/* @var $this DegreeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Degrees',
);

$this->menu=array(
	array('label'=>'Create Degree', 'url'=>array('create')),
	array('label'=>'Manage Degree', 'url'=>array('admin')),
);
?>

<h1>Degrees</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
