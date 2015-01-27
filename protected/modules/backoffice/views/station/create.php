<?php
/* @var $this StationController */
/* @var $model Station */

/*$this->menu=array(
	array('label'=>'Список стан', 'url'=>array('index')),
	array('label'=>'Manage Station', 'url'=>array('admin')),
);*/
?>

<h1>Создать станцию</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>