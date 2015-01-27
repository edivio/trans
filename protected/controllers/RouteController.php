<?php

class RouteController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','search'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Route;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Route']))
		{
			$model->attributes=$_POST['Route'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Route']))
		{
			$model->attributes=$_POST['Route'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
	}

	/**
	 * Manages all models.
	 */
	public function actionIndex()
	{
		$model=new Route('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Route']))
			$model->attributes=$_GET['Route'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Route the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Route::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function actionSearch()
        {
                $search = new SiteSearchForm;
                
                if(isset($_POST['dispatch']) && isset($_POST['arrival']) && $_POST['dispatch'] !='' && $_POST['arrival'] !='' && $_POST['date'] !='') 
                {
                	print_r($_POST); echo $tw1;
                        $tw1 = $_POST['dispatch'];
                        $tw2 = $_POST['arrival'];
                        $tw3 = substr($_POST['date'], 0, 5);
                        echo $tw3;
                        $_GET['searchString'] = $search->dispatch;

                     $criteria = new CDbCriteria(array(
                	'condition' => 'st_dispatch='.$tw1.' AND st_arrival='.$tw2 .' AND date_dispatch='.$tw3,  
	                ));
	                
	                /*$materialCount = Route::model()->count($criteria);
	                $pages = new CPagination($materialCount);
	                $pages->pageSize = 2;
	                $pages->applyLimit($criteria);*/
	                
	                $materials = Route::model()->findAll($criteria);
	                                                    
	                $this->render('found',array(
	                        'models' => $materials,
	                ));
                } else {
                        $this->render('fall');
                }
                
         	   

        }

	/**
	 * Performs the AJAX validation.
	 * @param Route $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='route-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
