<?php
/* @var $this DeveloperHasProjectsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Developer Has Projects',
);

$this->menu=array(
	array('label'=>'Create DeveloperHasProjects', 'url'=>array('create')),
	array('label'=>'Manage DeveloperHasProjects', 'url'=>array('admin')),
);
?>

<h1>Developer Has Projects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
