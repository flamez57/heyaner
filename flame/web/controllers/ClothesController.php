<?php

namespace app\flame\web\controllers;

use Yii;
use yii\web\Controller;
use vendor\funcs\Curlflame;
use yii\web\Session;
/**
 * Clothes controller for the `home` module
 */
class ClothesController extends Controller
{
    // 不要布局
    public $layout = false;
    /**
     * Renders the index view for the module
     * @author flame
     */
    public function actionIndex()
    {
    	// 衣服
        $data = [];
        $page = empty($_GET['p'])?'1':$_GET['p'];
    	$clothes_url = Yii::$app->params['api_url'].'api/clothes/list';
    	$clothes_arr = array('page'=>$page,'pagesize'=>'12');

    	$clothes = Curlflame::post($clothes_url,$clothes_arr);
    	if($clothes){
    		$clothess = json_decode(trim($clothes,chr(239).chr(187).chr(191)),true);
    		if($clothess['data']){
    			$data['clothes'] = $clothess['data'];
    		}
    	}
        $session = Yii::$app->session;
        if($session->get('language') == 'en'){
            return $this->render('en_index',$data);
        }else{
            return $this->render('index',$data);
        }
    }

    public function actionDetail()
    {
        // 衣服信息
        $clothes_url = Yii::$app->params['api_url'].'api/clothes/detail';
        $clothes_arr = array('id'=>$_GET['id']);

        $clothes = Curlflame::post($clothes_url,$clothes_arr);
        if($clothes){
            $clothess = json_decode(trim($clothes,chr(239).chr(187).chr(191)),true);
            if($clothess['data']){
                $data['clothes'] = $clothess['data'];
            }
        }
        // 衣服图册
        $clothesphoto_url = Yii::$app->params['api_url'].'api/clothesphoto/list';
        $clothesphoto_arr = array('coat_id'=>$_GET['id'],'page'=>1,'pagesize'=>7);

        $clothesphoto = Curlflame::post($clothesphoto_url,$clothesphoto_arr);
        if($clothesphoto){
            $clothesphotos = json_decode(trim($clothesphoto,chr(239).chr(187).chr(191)),true);
            if($clothesphotos['data']){
                $data['clothesphoto'] = $clothesphotos['data'];
            }
        }
        $session = Yii::$app->session;
        if($session->get('language') == 'en'){
            return $this->render('en_clothes_detail',$data);
        }else{
            return $this->render('clothes_detail',$data);
        }
        

    }
}
