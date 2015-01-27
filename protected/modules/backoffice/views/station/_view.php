<?php
/* @var $this StationController */
/* @var $data Station */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('st_name')); ?>:</b>
	<?php echo CHtml::encode($data->st_name); ?>
	<br />


</div>