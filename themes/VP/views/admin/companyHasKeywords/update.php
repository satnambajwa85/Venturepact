<?php
/* @var $this CompanyHasKeywordsController */
/* @var $model CompanyHasKeywords */

$this->breadcrumbs=array(
	'Company Has Keywords'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CompanyHasKeywords', 'url'=>array('index')),
	array('label'=>'Create CompanyHasKeywords', 'url'=>array('create')),
	array('label'=>'View CompanyHasKeywords', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CompanyHasKeywords', 'url'=>array('admin')),
);
?>

<h1>Update CompanyHasKeywords <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>