<?php
/* @var $this JobModeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Job Modes',
);

$this->menu=array(
	array('label'=>'Create JobMode', 'url'=>array('create')),
	array('label'=>'Manage JobMode', 'url'=>array('admin')),
);
?>

<h1>Job Modes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
