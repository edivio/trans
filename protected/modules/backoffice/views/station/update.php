<?php
/* @var $this StationController */
/* @var $model Station */

$this->breadcrumbs=array(
	'Stations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Station', 'url'=>array('index')),
	array('label'=>'Create Station', 'url'=>array('create')),
	array('label'=>'View Station', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Station', 'url'=>array('admin')),
);
?>

<h1>Update Station <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>