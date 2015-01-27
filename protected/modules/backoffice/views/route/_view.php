<?php
/* @var $this RouteController */
/* @var $data Route */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('st_dispatch')); ?>:</b>
	<?php echo CHtml::encode($data->st_dispatch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('st_arrival')); ?>:</b>
	<?php echo CHtml::encode($data->st_arrival); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_dispatch')); ?>:</b>
	<?php echo CHtml::encode($data->time_dispatch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_dispatch')); ?>:</b>
	<?php echo CHtml::encode($data->date_dispatch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hold')); ?>:</b>
	<?php echo CHtml::encode($data->hold); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_arrival')); ?>:</b>
	<?php echo CHtml::encode($data->time_arrival); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('places')); ?>:</b>
	<?php echo CHtml::encode($data->places); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('car_id')); ?>:</b>
	<?php echo CHtml::encode($data->car_id); ?>
	<br />

	*/ ?>

</div>