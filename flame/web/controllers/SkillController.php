<?php

namespace app\flame\web\controllers;

use Yii;
use yii\web\Controller;
use vendor\funcs\Curlflame;
use yii\web\Session;
/**
 * Skill controller for the `home` module
 */
class SkillController extends Controller
{
	// 不要布局
    public $layout = false;
    /**
     * Renders the index view for the module
     * @author flame
     */
    public function actionIndex()
    {
    	
    	$data = [];
    	// 轮播图
    	$brand_url = Yii::$app->params['api_url'].'api/brand/brand';
    	$brand_arr = array('page'=>1,'pagesize'=>3,'where'=>2);

    	$brand = Curlflame::post($brand_url,$brand_arr);
    	if($brand){
    		$brands = json_decode(trim($brand,chr(239).chr(187).chr(191)),true);
    		if($brands['data']){
    			$data['brand'] = $brands['data'];
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
       
        if(isset($_GET['fid']) && $_GET['fid']==1){
            // 手艺
            $skill_url = Yii::$app->params['api_url'].'api/skill/list';
            $skill_arr = array('page'=>1,'pagesize'=>5);

            $skill = Curlflame::post($skill_url,$skill_arr);
            if($skill){
                $skills = json_decode(trim($skill,chr(239).chr(187).chr(191)),true);
                if($skills['data']){
                    $data['skill'] = $skills['data'];
                }
            }
        }elseif(isset($_GET['fid']) && $_GET['fid']==2){
            // 活动
            $skillart_url = Yii::$app->params['api_url'].'api/skillart/list';
            $skillart_arr = array('page'=>1,'pagesize'=>5);

            $skillart = Curlflame::post($skillart_url,$skillart_arr);
            if($skillart){
                $skillarts = json_decode(trim($skillart,chr(239).chr(187).chr(191)),true);
                if($skillarts['data']){
                    $data['skillart'] = $skillarts['data'];
                }
            }
        }else{
            // 手艺人
            $skiller_url = Yii::$app->params['api_url'].'api/skiller/list';
            $skiller_arr = array('page'=>1,'pagesize'=>3);

            $skiller = Curlflame::post($skiller_url,$skiller_arr);
            if($skiller){
                $skillers = json_decode(trim($skiller,chr(239).chr(187).chr(191)),true);
                if($skillers['data']){
                    $data['skiller'] = $skillers['data'];
                }
            }

        }
        $session = Yii::$app->session;
        if($session->get('language') == 'en'){
            return $this->render('en_detail',$data);
        }else{
            return $this->render('detail',$data);
        }
    }

    public function actionIndexs()
    {
        
        $data = [];
        $page = empty($_GET['p'])?'1':$_GET['p'];
        if(isset($_GET['fid']) && $_GET['fid']==1){
            // 手艺
            $skill_url = Yii::$app->params['api_url'].'api/skill/list';
            $skill_arr = array('page'=>$page,'pagesize'=>5);

            $skill = Curlflame::post($skill_url,$skill_arr);
            if($skill){
                $skills = json_decode(trim($skill,chr(239).chr(187).chr(191)),true);
                if($skills['data']){
                    $data['skill'] = $skills['data'];
                }
            }
        }elseif(isset($_GET['fid']) && $_GET['fid']==2){
            // 活动
            $skillart_url = Yii::$app->params['api_url'].'api/skillart/list';
            $skillart_arr = array('page'=>$page,'pagesize'=>5);

            $skillart = Curlflame::post($skillart_url,$skillart_arr);
            if($skillart){
                $skillarts = json_decode(trim($skillart,chr(239).chr(187).chr(191)),true);
                if($skillarts['data']){
                    $data['skill'] = $skillarts['data'];
                }
            }
        }else{
            // 手艺人
            $skiller_url = Yii::$app->params['api_url'].'api/skiller/list';
            $skiller_arr = array('page'=>$page,'pagesize'=>3);

            $skiller = Curlflame::post($skiller_url,$skiller_arr);
            if($skiller){
                $skillers = json_decode(trim($skiller,chr(239).chr(187).chr(191)),true);
                if($skillers['data']){
                    $data['skill'] = $skillers['data'];
                }
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
