<?php
/* @var $this CompanyHasInvestorController */
/* @var $data CompanyHasInvestor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_id')); ?>:</b>
	<?php echo CHtml::encode($data->company_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Investor_id')); ?>:</b>
	<?php echo CHtml::encode($data->Investor_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('share')); ?>:</b>
	<?php echo CHtml::encode($data->share); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>