<?php
/* @var $this CarController */
/* @var $model Car */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'car-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'car_type'); ?>
		<?php echo $form->textField($model,'car_type',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'car_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'places'); ?>
		<?php echo $form->textField($model,'places',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'places'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->