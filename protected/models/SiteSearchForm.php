<?php

class SiteSearchForm extends CFormModel
{
  public $date;
  public $dispatch;
  public $arrival;

  public function rules() {
    return array(array('dispatch, arrival, date', 'required'));
  }

  public function safeAttributes() {
    return array('arrival','dispatch','date');
  }

}