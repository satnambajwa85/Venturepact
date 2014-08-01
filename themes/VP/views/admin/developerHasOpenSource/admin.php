<?php
/* @var $this DeveloperHasOpenSourceController */
/* @var $model DeveloperHasOpenSource */

$this->breadcrumbs=array(
	'Developer Has Open Sources'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DeveloperHasOpenSource', 'url'=>array('index')),
	array('label'=>'Create DeveloperHasOpenSource', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#developer-has-open-source-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Developer Has Open Sources</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'developer-has-open-source-grid',
	'dataProvider'=>$model->search(),
//	'filter'=>$model,
	'columns'=>array(
		'id',
	array(
			'name'=>'developer_id',
			'value'=>'$data->developer->first_name'),
	array(
			'name'=>'open_source_id',
			'value'=>'$data->openSource->name'),
		'project_name',
		'details',
		'link',
		/*
		'status',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
