<?php
/* @var $this CountryController */
/* @var $data Country */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('country_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->country_id), array('view', 'id'=>$data->country_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iso_code2')); ?>:</b>
	<?php echo CHtml::encode($data->iso_code2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iso_code3')); ?>:</b>
	<?php echo CHtml::encode($data->iso_code3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address_format')); ?>:</b>
	<?php echo CHtml::encode($data->address_format); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postcode_required')); ?>:</b>
	<?php echo CHtml::encode($data->postcode_required); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>