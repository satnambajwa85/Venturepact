<?php
/* @var $this OpenSourceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Open Sources',
);

$this->menu=array(
	array('label'=>'Create OpenSource', 'url'=>array('create')),
	array('label'=>'Manage OpenSource', 'url'=>array('admin')),
);
?>

<h1>Open Sources</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
