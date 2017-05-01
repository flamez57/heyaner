<?php

namespace app\flame\api\controllers;
header("Access-Control-Allow-Origin:*");
use Yii;
use app\models\Skiller;
use yii\web\Controller;
use vendor\funcs\Response;  //引入格式化数据的类

/**
 * Default controller for the `api` module
 */
class SkillerController extends Controller
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
        $skiller = Skiller::find()->limit($_POST['pagesize'])->offset($offset)->all();
        if(!empty($skiller)){
            foreach($skiller as $k=>$v){
                $data[$k]['id'] = $v->id;
                $data[$k]['name'] = $v->name;
                $data[$k]['pic'] = Yii::$app->params['pic_url'].$v->pic;
                $data[$k]['skill'] = $v->skill;
                $data[$k]['workage'] = $v->workage;
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
        $detail = Skiller::findOne($_POST['id']);
        if(!empty($detail)){
            $data['id'] = $detail->id;
            $data['name'] = $detail->name;
            $data['pic'] = Yii::$app->params['pic_url'].$detail->pic;
            $data['skill'] = $detail->skill;
            $data['workage'] = $detail->workage;
            $data['intro'] = $detail->intro;
        }
            
        if(!empty($data)){
            Response::show(2000,'success',$data);
        }else{
            Response::show(2004,'filed'); 
        }
    }
}
