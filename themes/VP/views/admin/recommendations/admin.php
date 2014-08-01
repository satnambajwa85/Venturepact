<?php
/* @var $this RecommendationsController */
/* @var $model Recommendations */

$this->breadcrumbs=array(
	'Recommendations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Recommendations', 'url'=>array('index')),
	array('label'=>'Create Recommendations', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#recommendations-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Recommendations</h1>

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
	'id'=>'recommendations-grid',
	'dataProvider'=>$model->search(),
//	'filter'=>$model,
	'columns'=>array(
		'id',
		array(	
			 'name'=>'developer_id',
			  'value'=>'$data->developer->first_name'
			  ),
		'name',
		'email',
		'phone_number',
	//	'linked_in_profile',
		//'status',
		/*
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
