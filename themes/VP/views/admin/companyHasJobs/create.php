<?php
/* @var $this CompanyHasJobsController */
/* @var $model CompanyHasJobs */

$this->breadcrumbs=array(
	'Company Has Jobs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CompanyHasJobs', 'url'=>array('index')),
	array('label'=>'Manage CompanyHasJobs', 'url'=>array('admin')),
);
?>

<h1>Create CompanyHasJobs</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>