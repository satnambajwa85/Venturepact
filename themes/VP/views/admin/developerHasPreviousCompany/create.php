<?php
/* @var $this DeveloperHasPreviousCompanyController */
/* @var $model DeveloperHasPreviousCompany */

$this->breadcrumbs=array(
	'Developer Has Previous Companies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DeveloperHasPreviousCompany', 'url'=>array('index')),
	array('label'=>'Manage DeveloperHasPreviousCompany', 'url'=>array('admin')),
);
?>

<h1>Create DeveloperHasPreviousCompany</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>