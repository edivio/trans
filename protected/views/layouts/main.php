<?php /* @var $this Controller */ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/template.css">
</head>
<body>
	<header>
		<section id="header-in">
			<div class="logo">
				<a href="/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo.png" alt="Logo"></a>
			</div>
			<div class="menu">
			<?php $this->widget('zii.widgets.CMenu',array(
			  'items'=>array(
			    array('label'=>'Главная', 'url'=>array('/site/index')),
			    array('label'=>'Расписание', 'url'=>array('/site/routes')),
			    array('label'=>'Водители', 'url'=>array('/site/drivers')),
			    array('label'=>'Автобусы', 'url'=>array('/site/cars')),
			    array('label'=>'Контакты', 'url'=>array('/site/contact')),
			  ),
			)); ?>
			</div>
		</section>
	</header>
	<section id="content">
		<div class="content-in">
			<?php echo $content; ?>
		</div>
	</section>
	<footer>
		<div class="footer-in">
			<div class="copy">
				© 2014 Сайт заказа билетов. Все права защищены.
			</div>
			<div class="footer-menu">
				<ul>
					<li><a class="active" href="#">Главная</a></li>
					<li><a href="#">Расписание</a></li>
					<li><a href="#">Водители</a></li>
					<li><a href="#">Автобусы</a></li>
					<li class="last"><a href="#">Контакты</a></li>
				</ul>
			</div>
		</div>
	</footer>
</body>
</html>