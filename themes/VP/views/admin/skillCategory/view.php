<?php
/* @var $this SkillCategoryController */
/* @var $model SkillCategory */

$this->breadcrumbs=array(
	'Skill Categories'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List SkillCategory', 'url'=>array('index')),
	array('label'=>'Create SkillCategory', 'url'=>array('create')),
	array('label'=>'Update SkillCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SkillCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SkillCategory', 'url'=>array('admin')),
);
?>

<h1>View SkillCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
		'status',
	),
)); ?>
