<?php

namespace app\flame\sweet\controllers;

use Yii;
use yii\web\Controller;
use app\models\LoginForm;
use app\models\SignupForm;
use app\models\User;
/**
 * 所有示例页面的渲染
 */
class AuthorityController extends Controller
{
	// 不要布局
	public $layout = false;
 
    /**
     * 登陆一
     */
    public function actionLogin()
    {
        if(!\Yii::$app->user->isGuest){
            return $this->redirect('../index/index');
        }
        $model = new LoginForm();
        if($model->load(Yii::$app->request->post()) && $model->login()){
            return $this->redirect('../index/index');
        }else{
            return $this->render('login', [
                'model' => $model,
            ]);
        }      
    }

    /**
     * 登陆页面二
     */
    public function actionLogin_v2()
    {
        if(!\Yii::$app->user->isGuest){
            return $this->goHome();
        }
        $model = new LoginForm();
        if($model->load(Yii::$app->request->post()) && $model->login()){
            return $this->goBack();
        }else{
            return $this->render('login_v2', [
                'model' => $model,
            ]);
        }  
    }
    /**
     * 注册页面
     */
    public function actionRegister()
    {   
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            
            if ($user = $model->signup()) {
                       
                if(Yii::$app->getUser()->login($user)) {
                    return $this->redirect('../index/index');
                }else{
                    var_dump($user);
                }
            }
            var_dump($model->getErrors());
        }

        return $this->render('register', [
            'model' => $model,
        ]);
    }
    /**
     * 登陆超时页面
     */
    public function actionLockscreen()
    {
        return $this->render('lockscreen');
    }
    /**
     * 404
     */
    public function action404()
    {
        return $this->render('404');
    }
    /**
     * 500
     */
    public function action500()
    {
        return $this->render('500');
    }
    /**
     * 空白页面
     */
    public function actionEmpty_page()
    {
        return $this->render('empty_page');
    }
    
    /**
     * 退出
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect('../index');
    }

   
}
