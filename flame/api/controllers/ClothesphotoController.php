<?php

namespace app\flame\api\controllers;
header("Access-Control-Allow-Origin:*");
use Yii;
use app\models\Clothesphoto;
use yii\web\Controller;
use vendor\funcs\Response;  //引入格式化数据的类

/**
 * Default controller for the `api` module
 */
class ClothesphotoController extends Controller
{
	public $enableCsrfValidation = false;
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionList()
    {   
        if(empty($_POST['coat_id']) || empty($_POST['page']) || empty($_POST['pagesize'])){
            Response::show(2004,'参数不全');
        }
        $offset = ($_POST['page']-1)*$_POST['pagesize'];
        $shophoto = Clothesphoto::find()->where(['coat_id'=>$_POST['coat_id']])->limit($_POST['pagesize'])->offset($offset)->all();
        if(!empty($shophoto)){
            foreach($shophoto as $k=>$v){
                $data[$k]['photo'] = Yii::$app->params['pic_url'].$v->photo;
                $data[$k]['id'] = $v->id;
            }
        }
            
        if(!empty($data)){
            Response::show(2000,'success',$data);
        }else{
            Response::show(2004,'获取分类失败'); 
        }
    }
}
