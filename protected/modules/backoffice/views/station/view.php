<?php
/* @var $this StationController */
/* @var $model Station */

$this->menu=array(
	array('label'=>'Создать станцию', 'url'=>array('create')),
	array('label'=>'Изменить станцию', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить станцию', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление станциями', 'url'=>array('admin')),
);
?>

<h1>Просмотр станции <?php echo $model->st_name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'st_name',
	),
)); ?>
