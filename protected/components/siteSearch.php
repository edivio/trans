<?php

class SiteSearch extends CWidget 
{
	public function run()
	{
    	$form = new SiteSearchForm();
    	$this->render('siteSearch', array('form'=>$form));
  	}
}