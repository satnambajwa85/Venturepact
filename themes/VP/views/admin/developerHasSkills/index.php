<?php
/* @var $this DeveloperHasSkillsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Developer Has Skills',
);

$this->menu=array(
	array('label'=>'Create DeveloperHasSkills', 'url'=>array('create')),
	array('label'=>'Manage DeveloperHasSkills', 'url'=>array('admin')),
);
?>

<h1>Developer Has Skills</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
