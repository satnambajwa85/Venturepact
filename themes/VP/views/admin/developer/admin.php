<?php
/* @var $this DeveloperController */
/* @var $model Developer */

$this->breadcrumbs=array(
	'Developers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Developer', 'url'=>array('index')),
	array('label'=>'Create Developer', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#developer-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Developers</h1>

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

<?php //$this->widget('application.extensions.csv.csvWidget', array('property1'=>'value1','property2'=>'value2'));?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'developer-grid',
	'dataProvider'=>$model->search(),
//	'filter'=>$model,
	'columns'=>array(
		'id',
		'first_name',
		'last_name',
		'phone',
		'alternative_email',
		//array('name'=>'state_id','value'=>'$data->state->name'),
		'add_date',
		'status',
		/*
		'dob',
		'address1',
		'address2',
		'pincode',
		
		'users_id',
		'time_zone_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
		 array(
                     'name'=>'Profile Link',
					  'type'=>'raw',
                     //'urlExpression'=>'array("admin/devices/view","id"=>$data->id)',
                    'value'=>'CHtml::link("Profile", array("/admin/developer/profile","id"=>$data->id))',
                  ),
	),
)); ?>
