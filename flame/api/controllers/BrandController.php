<?php

namespace app\flame\api\controllers;
header("Access-Control-Allow-Origin:*");
use Yii;
use app\models\Brand;
use yii\web\Controller;
use vendor\funcs\Response;  //引入格式化数据的类

/**
 * Default controller for the `api` module
 */
class BrandController extends Controller
{
	public $enableCsrfValidation = false;
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionBrand()
    {
    	if(empty($_POST['where']) || empty($_POST['page']) || empty($_POST['pagesize'])){
    		Response::show(2004,'参数不全');
    	}
    	$offset = ($_POST['page']-1)*$_POST['pagesize'];
    	$brand = Brand::find()->where(['where'=>$_POST['where'],'status'=>0])->limit($_POST['pagesize'])->offset($offset)->all();
    	if(!empty($brand)){
    		foreach($brand as $k=>$v){
	    		$data[$k]['brand_pic'] = Yii::$app->params['pic_url'].$v->brand_pic;
	    		$data[$k]['url'] = $v->url;
	    		$data[$k]['interaction_id'] = $v->interaction_id;
	    	}
    	}
	    	
    	if(!empty($data)){
            Response::show(2000,'success',$data);
        }else{
            Response::show(2004,'获取分类失败'); 
        }
    }
}
