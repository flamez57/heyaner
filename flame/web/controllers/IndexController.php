<?php

namespace app\flame\web\controllers;

use Yii;
use yii\web\Controller;
use vendor\funcs\Curlflame;
use yii\web\Session;
/**
 * Index controller for the `home` module
 */
class IndexController extends Controller
{
    // 不要布局
    public $layout = false;
    /**
     * Renders the index view for the module
     * @author flame
     */
    public function actionIndex()
    {
    	// 轮播图
    	$brand_url = Yii::$app->params['api_url'].'api/brand/brand';
    	$brand_arr = array('page'=>1,'pagesize'=>5,'where'=>1);

    	$brand = Curlflame::post($brand_url,$brand_arr);
    	if($brand){
    		$brands = json_decode(trim($brand,chr(239).chr(187).chr(191)),true);
    		if($brands['data']){
    			$data['brand'] = $brands['data'];
    		}
    	}

    	// since
    	/*$since_url = Yii::$app->params['api_url'].'api/since/list';
    	$since_arr = array('page'=>1,'pagesize'=>10);

    	$since = Curlflame::post($since_url,$since_arr);
    	if($since){
    		$sinces = json_decode(trim($since,chr(239).chr(187).chr(191)),true);
    		if($sinces['data']){
    			$data['since'] = $sinces['data'];
    		}
    	}*/
    	// 手艺
    	$skill_url = Yii::$app->params['api_url'].'api/skill/list';
    	$skill_arr = array('page'=>1,'pagesize'=>3);

    	$skill = Curlflame::post($skill_url,$skill_arr);
    	if($skill){
    		$skills = json_decode(trim($skill,chr(239).chr(187).chr(191)),true);
    		if($skills['data']){
    			$data['skill'] = $skills['data'];
    		}
    	}
        $session = Yii::$app->session;
        if($session->get('language') == 'en'){
            return $this->render('en_index',$data);
        }else{
            return $this->render('index',$data);
        }
    }
}
