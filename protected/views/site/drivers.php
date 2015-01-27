<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$drivers = 'class="active"';
?>
<?php 
	$arr = array();
	$arr = Pages::getContent('1');
?>
<h1><?php echo $arr['title']; ?></h1>
<p><?php echo $arr['content']; ?></p>