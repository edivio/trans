<?php
/* @var $this RouteController */
/* @var $model Route */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'route-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'st_dispatch'); ?>
		<?php echo $form->dropDownlist($model,'st_dispatch',Station::all_stations()); ?>
		<?php echo $form->error($model,'st_dispatch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'st_arrival'); ?>
		<?php echo $form->dropDownlist($model,'st_arrival',Station::all_stations()); ?>
		<?php echo $form->error($model,'st_arrival'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_dispatch'); ?>
		<?php echo $form->textField($model,'time_dispatch'); ?>
		<?php echo $form->error($model,'time_dispatch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_dispatch'); ?>
		<?php echo $form->textField($model,'date_dispatch'); ?>
		<?php echo $form->error($model,'date_dispatch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hold'); ?>
		<?php echo $form->textField($model,'hold',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'hold'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_arrival'); ?>
		<?php echo $form->textField($model,'time_arrival'); ?>
		<?php echo $form->error($model,'time_arrival'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'places'); ?>
		<?php echo $form->textField($model,'places',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'places'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'car_id'); ?>
		<?php echo $form->dropDownlist($model,'car_id',Car::all_cars()); ?>
		<?php echo $form->error($model,'car_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->