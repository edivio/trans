<?php
/* @var $this RouteController */
/* @var $model Route */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'st_dispatch'); ?>
		<?php echo $form->textField($model,'st_dispatch',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'st_arrival'); ?>
		<?php echo $form->textField($model,'st_arrival',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time_dispatch'); ?>
		<?php echo $form->textField($model,'time_dispatch'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_dispatch'); ?>
		<?php echo $form->textField($model,'date_dispatch'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hold'); ?>
		<?php echo $form->textField($model,'hold',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time_arrival'); ?>
		<?php echo $form->textField($model,'time_arrival'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'places'); ?>
		<?php echo $form->textField($model,'places',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'car_id'); ?>
		<?php echo $form->textField($model,'car_id',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Поиск'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->