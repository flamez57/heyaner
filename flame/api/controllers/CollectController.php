<?php

namespace app\flame\api\controllers;
header("Access-Control-Allow-Origin:*");
use Yii;
use app\models\Collect;
use yii\web\Controller;
use vendor\funcs\Response;  //引入格式化数据的类

/**
 * Default controller for the `api` module
 */
class CollectController extends Controller
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
        if(empty($_POST['sid'])){
            $collect = Collect::find()->limit($_POST['pagesize'])->offset($offset)->orderBy('id DESC')->all(); 
        }else{
            $collect = Collect::find()->where(['type'=>$_POST['sid']])->limit($_POST['pagesize'])->offset($offset)->orderBy('id DESC')->all(); 
        }
        
        if(!empty($collect)){
            foreach($collect as $k=>$v){
                $data[$k]['id'] = $v->id;
                $data[$k]['name'] = $v->name;
                $data[$k]['pic'] = Yii::$app->params['pic_url'].$v->pic;
                $data[$k]['fashion'] = $v->fashion;
                $data[$k]['material'] = $v->material;
                $data[$k]['type'] = $v->type;
                $data[$k]['craft'] = $v->craft;
                $data[$k]['show_time'] = $v->show_time;
                $data[$k]['show_address'] = $v->show_address;
                $data[$k]['intro'] = $v->intro;
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
        $detail = Collect::findOne($_POST['id']);
        if(!empty($detail)){
            $data['id'] = $detail->id;
            $data['name'] = $detail->name;
            $data['pic'] = Yii::$app->params['pic_url'].$detail->pic;
            $data['fashion'] = $detail->fashion;
            $data['material'] = $detail->material;
            $data['type'] = $detail->type;
            $data['craft'] = $detail->craft;
            $data['show_time'] = $detail->show_time;
            $data['show_address'] = $detail->show_address;
            $data['intro'] = $detail->intro;
        }
        if(!empty($data)){
            Response::show(2000,'success',$data);
        }else{
            Response::show(2004,'filed'); 
        }
    }
}
