<?php
/* @var $this FrameworksController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Frameworks',
);

$this->menu=array(
	array('label'=>'Create Frameworks', 'url'=>array('create')),
	array('label'=>'Manage Frameworks', 'url'=>array('admin')),
);
?>

<h1>Frameworks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
