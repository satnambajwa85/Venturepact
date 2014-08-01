<?php
/* @var $this CompanyHasKeywordsController */
/* @var $model CompanyHasKeywords */

$this->breadcrumbs=array(
	'Company Has Keywords'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CompanyHasKeywords', 'url'=>array('index')),
	array('label'=>'Manage CompanyHasKeywords', 'url'=>array('admin')),
);
?>

<h1>Create CompanyHasKeywords</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>