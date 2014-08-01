<?php
/* @var $this RecommendationsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Recommendations',
);

$this->menu=array(
	array('label'=>'Create Recommendations', 'url'=>array('create')),
	array('label'=>'Manage Recommendations', 'url'=>array('admin')),
);
?>

<h1>Recommendations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
