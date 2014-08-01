<?php
/* @var $this JobModeController */
/* @var $model JobMode */

$this->breadcrumbs=array(
	'Job Modes'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobMode', 'url'=>array('index')),
	array('label'=>'Create JobMode', 'url'=>array('create')),
	array('label'=>'View JobMode', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JobMode', 'url'=>array('admin')),
);
?>

<h1>Update JobMode <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>