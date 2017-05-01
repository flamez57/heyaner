<?php

namespace app\flame\web\controllers;

use Yii;
use yii\web\Controller;
use vendor\funcs\Curlflame;
use yii\web\Session;
/**
 * Since controller for the `home` module
 */
class SinceController extends Controller
{
	// 不要布局
    public $layout = false;
    /**
     * Renders the index view for the module
     * @author flame
     */
    public function actionIndex()
    {
    	// since
        $sincez_url = Yii::$app->params['api_url'].'api/since/lists';
        $sincez_arr = array('page'=>1,'pagesize'=>'12');

        $sincez = Curlflame::post($sincez_url,$sincez_arr);
        if($sincez){
            $sincezs = json_decode(trim($sincez,chr(239).chr(187).chr(191)),true);
            if($sincezs['data']){
                $data['sincez'] = $sincezs['data'];
            }
        }
        // 公司有事
    	$since_url = Yii::$app->params['api_url'].'api/since/list';
    	$since_arr = array('page'=>1,'pagesize'=>'12');

    	$since = Curlflame::post($since_url,$since_arr);
    	if($since){
    		$sinces = json_decode(trim($since,chr(239).chr(187).chr(191)),true);
    		if($sinces['data']){
    			$data['since'] = $sinces['data'];
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
