<?php

namespace app\flame\web\controllers;

use yii\web\Controller;
use yii\web\Session;
/**
 * Start controller for the `home` module
 */
class LangController extends Controller
{
	public $layout = false;
    /**
     * Renders the index view for the home module
     * @author flame
     */
    public function actionLanguage()
    {
    	$language=  \Yii::$app->request->get('lang');  
	    if(isset($language)){  
	        \Yii::$app->session['language']=$language;  
	    }  
	    //切换完语言哪来的返回到哪里
	    $this->goBack(\Yii::$app->request->headers['Referer']);  
    }
    //启动页专用
    public function actionLanguages()
    {
        $language=  \Yii::$app->request->get('lang');  
        if(isset($language)){  
            \Yii::$app->session['language']=$language;  
        }  
        //切换完语言哪来的返回到哪里
        $this->redirect('../index/index');  
    }
}
