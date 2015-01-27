<div id="search">
    <div id="search_div">
    	<?php $url = $this->getController()->createUrl('route/search'); ?>
		<?php echo CHtml::beginForm($url); ?>
		<?php echo CHtml::dropDownList('dispatch', $model, Station::all(), array('empty' => 'Станция отправления')); ?>
		<?php echo CHtml::error($form,'dispatch'); ?>
		<?php echo CHtml::dropDownList('arrival', $model, Station::all(), array('empty' => 'Станция прибытия')); ?>
		<?php echo CHtml::error($form,'arrival'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'date',
    // additional javascript options for the date picker plugin
    'options'=>array(  
                                        'showAnim'=>'fold',  
                                        'dateFormat'=>'dd.mm.y',  
                                        'changeMonth' => 'true',  
                                        'changeYear'=>'true',  
                                ), 
)); ?>
		<?php echo CHtml::error($form,'date'); ?>
		<?php echo CHtml::SubmitButton('Поиск'); ?>
		<?php echo CHtml::endForm(); ?>
    </div>
</div>