<?php
/* @var $this DeveloperHasOpenSourceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Developer Has Open Sources',
);

$this->menu=array(
	array('label'=>'Create DeveloperHasOpenSource', 'url'=>array('create')),
	array('label'=>'Manage DeveloperHasOpenSource', 'url'=>array('admin')),
);
?>

<h1>Developer Has Open Sources</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
