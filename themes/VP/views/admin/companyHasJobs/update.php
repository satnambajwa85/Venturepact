<?php
/* @var $this CompanyHasJobsController */
/* @var $model CompanyHasJobs */

$this->breadcrumbs=array(
	'Company Has Jobs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CompanyHasJobs', 'url'=>array('index')),
	array('label'=>'Create CompanyHasJobs', 'url'=>array('create')),
	array('label'=>'View CompanyHasJobs', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CompanyHasJobs', 'url'=>array('admin')),
);
?>

<h1>Update CompanyHasJobs <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>