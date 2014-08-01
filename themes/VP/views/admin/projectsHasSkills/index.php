<?php
/* @var $this ProjectsHasSkillsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Projects Has Skills',
);

$this->menu=array(
	array('label'=>'Create ProjectsHasSkills', 'url'=>array('create')),
	array('label'=>'Manage ProjectsHasSkills', 'url'=>array('admin')),
);
?>

<h1>Projects Has Skills</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
