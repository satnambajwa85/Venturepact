<?php
/* @var $this SkillCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Skill Categories',
);

$this->menu=array(
	array('label'=>'Create SkillCategory', 'url'=>array('create')),
	array('label'=>'Manage SkillCategory', 'url'=>array('admin')),
);
?>

<h1>Skill Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
