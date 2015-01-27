<?php

/**
 * This is the model class for table "route".
 *
 * The followings are the available columns in table 'route':
 * @property integer $id
 * @property string $st_dispatch
 * @property string $st_arrival
 * @property string $time_dispatch
 @property string $date_dispatch
 * @property string $hold
 * @property string $time_arrival
 * @property string $places
 * @property string $car_id
 */
class Route extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'route';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('st_dispatch, st_arrival, hold, places, car_id', 'length', 'max'=>255),
			array('time_dispatch, date_dispatch, time_arrival', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, st_dispatch, st_arrival, time_dispatch, date_dispatch, hold, time_arrival, places, car_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'car'=>array(self::BELONGS_TO, 'Car', 'car_id'),
			'station'=>array(self::BELONGS_TO, 'Station', 'st_dispatch'),
			'station1'=>array(self::BELONGS_TO, 'Station', 'st_arrival'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'st_dispatch' => 'Станция отправления',
			'st_arrival' => 'Станция прибытия',
			'time_dispatch' => 'Отправление',
			'date_dispatch' => 'Дата',
			'hold' => 'В пути',
			'time_arrival' => 'Прибытие',
			'places' => 'Цена',
			'car_id' => 'Автобус',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('st_dispatch',$this->st_dispatch,true);
		$criteria->compare('st_arrival',$this->st_arrival,true);
		$criteria->compare('time_dispatch',$this->time_dispatch,true);
		$criteria->compare('date_dispatch',$this->date_dispatch,true);
		$criteria->compare('hold',$this->hold,true);
		$criteria->compare('time_arrival',$this->time_arrival,true);
		$criteria->compare('places',$this->places,true);
		$criteria->compare('car_id',$this->car_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Route the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
