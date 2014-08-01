<?php
/* @var $this CompanyHasDeveloperController */
/* @var $model CompanyHasDeveloper */

$this->breadcrumbs=array(
	'Company Has Developers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CompanyHasDeveloper', 'url'=>array('index')),
	array('label'=>'Create CompanyHasDeveloper', 'url'=>array('create')),
	array('label'=>'View CompanyHasDeveloper', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CompanyHasDeveloper', 'url'=>array('admin')),
);
?>

<h1>Update CompanyHasDeveloper <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>