<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$index = 'class="active"';
$today = (string)date('d.m.y');
$today_criteria = (string)date('d.m');
$criteria = new CDbCriteria(array('condition' => 'date_dispatch = '.$today_criteria));
?>
<h1>Найти и купить билет на автобус онлайн</h1>

<?php
    $this->beginWidget('siteSearch');
    $this->endWidget();
?>

<h1>Расписание движения автобусов на <?php echo $today; ?></h1>

<div class="t_top"></div>
<table>
	<thead>
		<th class="th1">#</th>
		<th class="th2">Станция отправления</th>
		<th class="th2">Станция прибытия</th>
		<th class="th4">Отправление</th>
		<th class="th5">В пути</th>
		<th class="th4">Прибытие</th>
		<th class="th7">Мест</th>
		<th class="th8">Автобус</th>
		<th class="th9">Цена</th>
	</thead>
<?php 
	$models = Route::model()->findAll($criteria);

	foreach($models as $el) : ?>
	<?php 
		$car_id = Car::model()->findByPk($el->car_id); $car=$car_id['car_type'];
		$st_dispatch_id = Station::model()->findByPk($el->st_dispatch); $st_dispatch=$st_dispatch_id['st_name'];
		$st_arrival_id = Station::model()->findByPk($el->st_arrival); $st_arrival=$st_arrival_id['st_name'];
	?>
	<tr>
		<td><?php echo $el->id; ?></td>
		<td><?php echo $st_dispatch; ?></td>
		<td><?php echo $st_arrival; ?></td>
		<td><?php echo $el->time_dispatch, ' ', $el->date_dispatch; ?></td>
		<td><?php echo $el->hold; ?></td>
		<td><?php echo $el->time_arrival; ?></td>
		<td><?php echo $car_id['places'] ?></td>
		<td><?php echo $car; ?></td>
		<td><?php echo $el->places; ?> купить</td>
	</tr>
<?php endforeach; ?>

</table>
<h2>Как купить электронный билет на автобус</h2>
<p>Забронировать и купить билет на автобус можно в нашей поисковой системе выше. Для этого необходимо выбрать пункт отправления, пункт прибытия, дату, кол-во пассажиров и нажать кнопку Найти. Система предложит список подходящих рейсов. Выбрав нужный Вам маршрут, Вы приступаете к оформлению билетов. Необходимо корректно ввести данные пассажиров. Система бронирует билеты на соответствующем автовокзале в режиме реального времени. Забронированные автобусные билеты должны быть оплачены согласно указанного системой срока оплаты, в полученном Вами уведомлении по электронной почте. В случае несвоевременной оплаты бронирование будет автоматически отменено. Статус заказа отображается в личном кабинете магазина электронных билетов online.yugavtotrans.ru, в графе «Заказ».</p>
<p>После получения подтверждения об оплате на этой же странице появляется возможность загрузить, просмотреть и распечатать Ваш электронный билет. Этот билет и является документом, подтверждающим Ваше право на проезд в автобусе. Этот посадочный билет необходимо распечатать. В случае невозможности распечатать электронный билет, посадка производится по документу, зарегистрированному Вами при покупке электронного билета на автобус.</p>