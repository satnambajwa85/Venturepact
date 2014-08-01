<?php
/* @var $this InvestorController */
/* @var $model Investor */

$this->breadcrumbs=array(
	'Investors'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Investor', 'url'=>array('index')),
	array('label'=>'Create Investor', 'url'=>array('create')),
	array('label'=>'View Investor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Investor', 'url'=>array('admin')),
);
?>

<h1>Update Investor <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>