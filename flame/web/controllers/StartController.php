<?php

namespace app\flame\web\controllers;

use yii\web\Controller;
use yii\web\Session;
/**
 * Start controller for the `home` module
 */
class StartController extends Controller
{
	public $layout = false;
    /**
     * Renders the index view for the home module
     * @author flame
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
