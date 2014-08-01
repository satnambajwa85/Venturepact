<?php
/* @var $this DeveloperHasCompanyController */
/* @var $model DeveloperHasCompany */

$this->breadcrumbs=array(
	'Developer Has Companies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DeveloperHasCompany', 'url'=>array('index')),
	array('label'=>'Manage DeveloperHasCompany', 'url'=>array('admin')),
);
?>

<h1>Create DeveloperHasCompany</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>