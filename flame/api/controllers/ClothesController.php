<?php

namespace app\flame\api\controllers;
header("Access-Control-Allow-Origin:*");
use Yii;
use app\models\Clothes;
use yii\web\Controller;
use vendor\funcs\Response;  //引入格式化数据的类

/**
 * Default controller for the `api` module
 */
class ClothesController extends Controller
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
        $clothes = Clothes::find()->limit($_POST['pagesize'])->offset($offset)->all();
        if(!empty($clothes)){
            foreach($clothes as $k=>$v){
                $data[$k]['id'] = $v->id;
                $data[$k]['cloth_name'] = $v->cloth_name;
                $data[$k]['model'] = $v->model;
                $data[$k]['material'] = $v->material;
                $data[$k]['fashion'] = $v->fashion;
                $data[$k]['belong'] = $v->belong;
                $data[$k]['cloth_pic'] = Yii::$app->params['pic_url'].$v->cloth_pic;
            }
        }
            
        if(!empty($data)){
            Response::show(2000,'success',$data);
        }else{
            Response::show(2004,'获取数据失败'); 
        }
    }


    public function actionDetail()
    {
        if(empty($_POST['id'])){
            Response::show(2004,'参数不全');
        }
        $detail = Clothes::findOne($_POST['id']);
        if(!empty($detail)){
            $data['id'] = $detail->id;
            $data['cloth_name'] = $detail->cloth_name;
            $data['model'] = $detail->model;
            $data['material'] = $detail->material;
            $data['fashion'] = $detail->fashion;
            $data['belong'] = $detail->belong;
            $data['cloth_pic'] = Yii::$app->params['pic_url'].$detail->cloth_pic;
        }
            
        if(!empty($data)){
            Response::show(2000,'success',$data);
        }else{
            Response::show(2004,'filed'); 
        }
    }
}
