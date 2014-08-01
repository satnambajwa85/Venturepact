<?php
/* @var $this PreviousCompanyController */
/* @var $model PreviousCompany */

$this->breadcrumbs=array(
	'Previous Companies'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PreviousCompany', 'url'=>array('index')),
	array('label'=>'Create PreviousCompany', 'url'=>array('create')),
	array('label'=>'View PreviousCompany', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PreviousCompany', 'url'=>array('admin')),
);
?>

<h1>Update PreviousCompany <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>