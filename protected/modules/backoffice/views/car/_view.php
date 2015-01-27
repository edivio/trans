<?php
/* @var $this CarController */
/* @var $data Car */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_type')); ?>:</b>
	<?php echo CHtml::encode($data->car_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('places')); ?>:</b>
	<?php echo CHtml::encode($data->places); ?>
	<br />


</div>