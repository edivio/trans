<?php
/* @var $this RouteController */
/* @var $model Route */

$this->menu=array(
	array('label'=>'Маршруты', 'url'=>array('index')),
);
?>

<h1>Обновление маршрута</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>