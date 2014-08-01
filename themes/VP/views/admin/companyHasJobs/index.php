<?php
/* @var $this CompanyHasJobsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Company Has Jobs',
);

$this->menu=array(
	array('label'=>'Create CompanyHasJobs', 'url'=>array('create')),
	array('label'=>'Manage CompanyHasJobs', 'url'=>array('admin')),
);
?>

<h1>Company Has Jobs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
