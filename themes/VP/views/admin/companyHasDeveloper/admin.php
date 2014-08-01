<?php
/* @var $this CompanyHasDeveloperController */
/* @var $model CompanyHasDeveloper */

$this->breadcrumbs=array(
	'Company Has Developers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CompanyHasDeveloper', 'url'=>array('index')),
	array('label'=>'Create CompanyHasDeveloper', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#company-has-developer-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Company Has Developers</h1>

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
<?php
?><?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'company-has-developer-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(

		'id',
		 array(
            'name' => 'company_id',
            'value' => '$data->company->name',
        ),
		array(
            'name' => 'developer_id',
            'value' => '$data->developer->first_name',
        ),
		array(
			'name'=>'status_id',
			'value'=>'$data->status->name',
			),
		
		/*
		'modification_date',
		'schedule_date',
		'add_date',
		
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
