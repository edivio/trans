<?php
/* @var $this RouteController */
/* @var $model Route */

$this->menu=array(
	array('label'=>'Маршруты', 'url'=>array('index')),
	array('label'=>'Создать маршрут', 'url'=>array('create')),
	array('label'=>'Обновить маршрут', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить маршрут', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены что хотите удалить этот маршрут?')),
);
?>
<?php 
	$zx = Car::model()->findByPk($model->car_id);
	$disp = Station::model()->findByPk($model->st_dispatch);
	$arriv = Station::model()->findByPk($model->st_arrival);
?>
<h1>Просмотр маршрута <?php echo $disp['st_name']; ?> - <?php echo $arriv['st_name']; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'st_dispatch'=>array(
			'name'=>'st_dispatch',
			'value'=>$disp['st_name']
		),
		'st_arrival'=>array(
			'name'=>'st_arrival',
			'value'=>$arriv['st_name']
		),
		'time_dispatch',
		'date_dispatch',
		'hold',
		'time_arrival',
		'places',
		'car_id'=>array(
			'name'=>'car_id',
			'value'=>$zx['car_type'].' ('.$zx['places'].')'
		),
	),
)); ?>
