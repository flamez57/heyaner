<?php

namespace app\flame\api\controllers;
header("Access-Control-Allow-Origin:*");
use Yii;
use app\models\Thing;
use app\models\Things;
use yii\web\Controller;
use vendor\funcs\Response;  //引入格式化数据的类

/**
 * Default controller for the `api` module
 */
class SinceController extends Controller
{
	public $enableCsrfValidation = false;
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionList()
    {
        if(empty($_POST['page']) || empty($_POST['pagesize'])){
            Response::show(2004,'参数不全');
        }
        $offset = ($_POST['page']-1)*$_POST['pagesize'];
        $things = Things::find()->limit($_POST['pagesize'])->offset($offset)->all();
        if(!empty($things)){
            foreach($things as $k=>$v){
                $data[$k]['id'] = $v->id;
                $data[$k]['title'] = $v->title;
                $data[$k]['content'] = $v->content;
            }
        }
            
        if(!empty($data)){
            Response::show(2000,'success',$data);
        }else{
            Response::show(2004,'获取分类失败'); 
        }
    }

    public function actionDetail()
    {
        if(empty($_POST['id'])){
            Response::show(2004,'参数不全');
        }
        $detail = Things::findOne($_POST['id']);
        if(!empty($detail)){
            $data['id'] = $detail->id;
            $data['title'] = $detail->title;
            $data['content'] = $detail->content;
        }
            
        if(!empty($data)){
            Response::show(2000,'success',$data);
        }else{
            Response::show(2004,'filed'); 
        }
    }

    public function actionLists()
    {
        if(empty($_POST['page']) || empty($_POST['pagesize'])){
            Response::show(2004,'参数不全');
        }
        $offset = ($_POST['page']-1)*$_POST['pagesize'];
        $things = Thing::find()->limit($_POST['pagesize'])->offset($offset)->all();
        if(!empty($things)){
            foreach($things as $k=>$v){
                $data[$k]['id'] = $v->id;
                $data[$k]['title'] = $v->title;
                $data[$k]['content'] = $v->content;
            }
        }
            
        if(!empty($data)){
            Response::show(2000,'success',$data);
        }else{
            Response::show(2004,'获取分类失败'); 
        }
    }

    public function actionDetails()
    {
        if(empty($_POST['id'])){
            Response::show(2004,'参数不全');
        }
        $detail = Thing::findOne($_POST['id']);
        if(!empty($detail)){
            $data['id'] = $detail->id;
            $data['title'] = $detail->title;
            $data['content'] = $detail->content;
        }
            
        if(!empty($data)){
            Response::show(2000,'success',$data);
        }else{
            Response::show(2004,'filed'); 
        }
    }
}
