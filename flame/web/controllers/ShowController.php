<?php

namespace app\flame\web\controllers;

use Yii;
use yii\web\Controller;
use vendor\funcs\Curlflame;
use yii\web\Session;
/**
 * Show controller for the `home` module
 */
class ShowController extends Controller
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
        $show_url = Yii::$app->params['api_url'].'api/collect/list';
        $show_arr = array('page'=>'1','pagesize'=>'1');

        $show = Curlflame::post($show_url,$show_arr);
        if($show){
            $shows = json_decode(trim($show,chr(239).chr(187).chr(191)),true);
            if($shows['data']){
                $data['show'] = $shows['data'];
            }
        }
        $session = Yii::$app->session;
        if($session->get('language') == 'en'){
            return $this->render('en_index',$data);
        }else{
            return $this->render('index',$data);
        }
    }
    public function actionIndexs()
    {
    	// 衣服
        $data = [];
        $page = empty($_GET['p'])?'1':$_GET['p'];
    	$show_url = Yii::$app->params['api_url'].'api/collect/list';
    	$show_arr = array('page'=>$page,'pagesize'=>'14');

    	$show = Curlflame::post($show_url,$show_arr);
    	if($show){
    		$shows = json_decode(trim($show,chr(239).chr(187).chr(191)),true);
    		if($shows['data']){
    			$data['show'] = $shows['data'];
    		}
    	}
        $session = Yii::$app->session;
        if($session->get('language') == 'en'){
            return $this->render('en_indexs',$data);
        }else{
            return $this->render('indexs',$data);
        }
    }
}
