<?php

namespace app\flame\web\controllers;

use Yii;
use yii\web\Controller;
use vendor\funcs\Curlflame;
use yii\web\Session;
/**
 * Collect controller for the `home` module
 */
class CollectController extends Controller
{
	// 不要布局
    public $layout = false;
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
    	// 衣服
    	$data = [];
        $page = empty($_GET['p'])?'1':$_GET['p'];
        $sid = isset($_GET['sid'])?$_GET['sid']:'';
    	$collect_url = Yii::$app->params['api_url'].'api/collect/list';
    	$collect_arr = array('page'=>$page,'pagesize'=>'12','sid'=>$sid);

    	$collect = Curlflame::post($collect_url,$collect_arr);
    	if($collect){
    		$collects = json_decode(trim($collect,chr(239).chr(187).chr(191)),true);
    		if($collects['data']){
    			$data['collect'] = $collects['data'];
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
        $data = [];
        $collect_url = Yii::$app->params['api_url'].'api/collect/detail';
        $collect_arr = array('id'=>$_GET['id']);

        $collect = Curlflame::post($collect_url,$collect_arr);
        if($collect){
            $collects = json_decode(trim($collect,chr(239).chr(187).chr(191)),true);
            if($collects['data']){
                $data['collect'][0] = $collects['data'];
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
