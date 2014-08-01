<?php
/* @var $this PreviousCompanyController */
/* @var $model PreviousCompany */

$this->breadcrumbs=array(
	'Previous Companies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PreviousCompany', 'url'=>array('index')),
	array('label'=>'Manage PreviousCompany', 'url'=>array('admin')),
);
?>

<h1>Create PreviousCompany</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>