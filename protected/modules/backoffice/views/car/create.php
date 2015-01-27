<?php
/* @var $this CarController */
/* @var $model Car */

$this->breadcrumbs=array(
	'Cars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Car', 'url'=>array('index')),
	array('label'=>'Manage Car', 'url'=>array('admin')),
);
?>

<h1>Create Car</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>