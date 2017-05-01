<?php

namespace app\flame\api\controllers;
header("Access-Control-Allow-Origin:*");
use Yii;
use app\models\Shop;
use yii\web\Controller;
use vendor\funcs\Response;  //引入格式化数据的类

/**
 * Default controller for the `api` module
 */
class ShopController extends Controller
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
        $shop = Shop::find()->limit($_POST['pagesize'])->offset($offset)->all();
        if(!empty($shop)){
            foreach($shop as $k=>$v){
                $data[$k]['id'] = $v->id;
                $data[$k]['store'] = $v->store;
                $data[$k]['address'] = $v->address;
                $data[$k]['phone'] = $v->phone;
                $data[$k]['shop_time'] = $v->shop_time;
                $data[$k]['store_pic'] = Yii::$app->params['pic_url'].$v->store_pic;
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
        $detail = Shop::findOne($_POST['id']);
        if(!empty($detail)){
            $data['id'] = $detail->id;
            $data['store'] = $detail->store;
            $data['address'] = $detail->address;
            $data['phone'] = $detail->phone;
            $data['shop_time'] = $detail->shop_time;
            $data['store_pic'] = Yii::$app->params['pic_url'].$detail->store_pic;
            $data['intro'] = $detail->intro;
        }
            
        if(!empty($data)){
            Response::show(2000,'success',$data);
        }else{
            Response::show(2004,'filed'); 
        }
    }
}
