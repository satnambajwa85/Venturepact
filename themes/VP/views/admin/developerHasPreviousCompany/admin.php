<?php
/* @var $this DeveloperHasPreviousCompanyController */
/* @var $model DeveloperHasPreviousCompany */

$this->breadcrumbs=array(
	'Developer Has Previous Companies'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DeveloperHasPreviousCompany', 'url'=>array('index')),
	array('label'=>'Create DeveloperHasPreviousCompany', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#developer-has-previous-company-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Developer Has Previous Companies</h1>

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
	'id'=>'developer-has-previous-company-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		array(
			'name'=>'developer_id',
			'value'=>'$data->developer->first_name'),	
		array(
			'name'=>'previous_company_id',
			'value'=>'$data->previousCompany->name'),
		'role',
		'start_time',
		'end_time',
		/*
		'link',
		'description',
		'status',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
