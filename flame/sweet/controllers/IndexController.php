<?php

namespace app\flame\sweet\controllers;

use yii\web\Controller;

/**
 * 所有示例页面的渲染
 */
class IndexController extends Controller
{
	// 不要布局
	public $layout = false;
    /**
     * 公共的部分
     */
    public function actionIndex()
    {
        if(!\Yii::$app->user->isGuest){
            return $this->render('index');

        }else{
            return $this->redirect('authority/login');
        }
    }
    /**
     * 首页
     */
    public function actionIndex_v148b2()
    {
        return $this->render('index_v148b2');
    }
    /**
     * 主页示例一
     */
    public function actionIndex_v1()
    {
        return $this->render('index_v1');
    }
    /**
     * 主页示例二
     */
    public function actionIndex_v2()
    {
        return $this->render('index_v2');
    }
    /**
     * 主页示例三
     */
    public function actionIndex_v3()
    {
        return $this->render('index_v3');
    }
    /**
     * 主页示例四
     */
    public function actionIndex_v4()
    {
        return $this->render('index_v4');
    }
    /**
     * 主页示例五
     */
    public function actionIndex_v5()
    {
        return $this->render('index_v5');
    }
    
   
    /**
     * 布局
     */
    public function actionLayouts()
    {
        return $this->render('layouts');
    }
     
}
