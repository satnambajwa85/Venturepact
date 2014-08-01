<?php
/* @var $this ReferencesController */
/* @var $model References */

$this->breadcrumbs=array(
	'References'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List References', 'url'=>array('index')),
	array('label'=>'Create References', 'url'=>array('create')),
	array('label'=>'View References', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage References', 'url'=>array('admin')),
);
?>

<h1>Update References <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>