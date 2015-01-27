<h1>Результаты поиска: </h1>

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
<?php foreach($models as $el) : ?>
        <?php 
                $car_id = Car::model()->findByPk($el->car_id); $car=$car_id['car_type'];
                $st_dispatch_id = Station::model()->findByPk($el->st_dispatch); $st_dispatch=$st_dispatch_id['st_name'];
                $st_arrival_id = Station::model()->findByPk($el->st_arrival); $st_arrival=$st_arrival_id['st_name'];
        ?>
        <tr>
                <td><?php echo $el->id; ?></td>
                <td><?php echo $st_dispatch; ?></td>
                <td><?php echo $st_arrival; ?></td>
                <td><?php echo $el->time_dispatch; ?></td>
                <td><?php echo $el->hold; ?></td>
                <td><?php echo $el->time_arrival; ?></td>
                <td><?php echo $car_id['places'] ?></td>
                <td><?php echo $car; ?></td>
                <td><?php echo $el->places; ?> купить</td>
        </tr>
<?php endforeach; ?>

</table>