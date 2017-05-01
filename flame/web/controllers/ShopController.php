<?php

namespace app\flame\web\controllers;

use Yii;
use yii\web\Controller;
use vendor\funcs\Curlflame;
use yii\web\Session;
/**
 * Shop controller for the `home` module
 */
class ShopController extends Controller
{
	// 不要布局
    public $layout = false;
    /**
     * Renders the index view for the module
     * @author flame
     */
    public function actionIndex()
    {
    	// 店铺
    	$data = [];
    	$shop_url = Yii::$app->params['api_url'].'api/shop/list';
    	$shop_arr = array('page'=>1,'pagesize'=>12);

    	$shop = Curlflame::post($shop_url,$shop_arr);
    	if($shop){
    		$shops = json_decode(trim($shop,chr(239).chr(187).chr(191)),true);
    		if($shops['data']){
    			$data['shop'] = $shops['data'];
    		}
    	}
        $session = Yii::$app->session;
        if($session->get('language') == 'en'){
            return $this->render('en_index',$data);
        }else{
            return $this->render('index',$data);
        }
    }

    /**
     * Renders the index view for the module
     * @author flame
     */
    public function actionDetail()
    {
    	$data = [];
    	// 店铺
    	$shop_url = Yii::$app->params['api_url'].'api/shop/list';
    	$shop_arr = array('page'=>1,'pagesize'=>6);

    	$shop = Curlflame::post($shop_url,$shop_arr);
    	if($shop){
    		$shops = json_decode(trim($shop,chr(239).chr(187).chr(191)),true);
    		if($shops['data']){
    			$data['shop'] = $shops['data'];
    		}
    	}
    	// 店铺详情
    	
    	$shopz_url = Yii::$app->params['api_url'].'api/shop/detail';
    	$shopz_arr = array('id'=>$_GET['id']);

    	$shopz = Curlflame::post($shopz_url,$shopz_arr);
    	if($shopz){
    		$shopzs = json_decode(trim($shopz,chr(239).chr(187).chr(191)),true);
    		if($shopzs['data']){
    			$data['shopz'] = $shopzs['data'];
    		}
    	}

    	// 店铺图册
    	$shophoto_url = Yii::$app->params['api_url'].'api/shophoto/list';
    	$shophoto_arr = array('shop_id'=>$_GET['id'],'page'=>1,'pagesize'=>7);

    	$shophoto = Curlflame::post($shophoto_url,$shophoto_arr);
    	if($shophoto){
    		$shophotos = json_decode(trim($shophoto,chr(239).chr(187).chr(191)),true);
    		if($shophotos['data']){
    			$data['shophoto'] = $shophotos['data'];
    		}
    	}
        $session = Yii::$app->session;
        if($session->get('language') == 'en'){
            return $this->render('en_index_v1',$data);
        }else{
            return $this->render('index_v1',$data);
        }
    }


}
