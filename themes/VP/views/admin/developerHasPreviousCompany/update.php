<?php
/* @var $this DeveloperHasPreviousCompanyController */
/* @var $model DeveloperHasPreviousCompany */

$this->breadcrumbs=array(
	'Developer Has Previous Companies'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DeveloperHasPreviousCompany', 'url'=>array('index')),
	array('label'=>'Create DeveloperHasPreviousCompany', 'url'=>array('create')),
	array('label'=>'View DeveloperHasPreviousCompany', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DeveloperHasPreviousCompany', 'url'=>array('admin')),
);
?>

<h1>Update DeveloperHasPreviousCompany <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>