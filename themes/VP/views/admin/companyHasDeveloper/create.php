<?php
/* @var $this CompanyHasDeveloperController */
/* @var $model CompanyHasDeveloper */

$this->breadcrumbs=array(
	'Company Has Developers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CompanyHasDeveloper', 'url'=>array('index')),
	array('label'=>'Manage CompanyHasDeveloper', 'url'=>array('admin')),
);
?>

<h1>Create CompanyHasDeveloper</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>