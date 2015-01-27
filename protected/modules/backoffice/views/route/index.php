<?php
/* @var $this RouteController */
/* @var $model Route */

$this->menu=array(
	array('label'=>'Создать маршрут', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#route-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление маршрутов</h1>


<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'route-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'st_dispatch'=>array(
			'name'=>'st_dispatch',
			'value'=>'$data->station->st_name'
		),
		'st_arrival'=>array(
			'name'=>'st_arrival',
			'value'=>'$data->station1->st_name'
		),
		'time_dispatch',
		'date_dispatch',
		'hold',
		'time_arrival',
		'places',
		'car_id'=>array(
			'name'=>'car_id',
			'value'=>'$data->car->car_type',
			'filter'=>Car::all_cars()
		),
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
