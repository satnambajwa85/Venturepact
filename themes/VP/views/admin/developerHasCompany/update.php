<?php
/* @var $this DeveloperHasCompanyController */
/* @var $model DeveloperHasCompany */

$this->breadcrumbs=array(
	'Developer Has Companies'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DeveloperHasCompany', 'url'=>array('index')),
	array('label'=>'Create DeveloperHasCompany', 'url'=>array('create')),
	array('label'=>'View DeveloperHasCompany', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DeveloperHasCompany', 'url'=>array('admin')),
);
?>

<h1>Update DeveloperHasCompany <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>