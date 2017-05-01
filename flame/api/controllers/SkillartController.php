<?php

namespace app\flame\api\controllers;
header("Access-Control-Allow-Origin:*");
use Yii;
use app\models\Skillart;
use yii\web\Controller;
use vendor\funcs\Response;  //引入格式化数据的类

/**
 * Default controller for the `api` module
 */
class SkillartController extends Controller
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
        $skillart = Skillart::find()->limit($_POST['pagesize'])->offset($offset)->all();
        if(!empty($skillart)){
            foreach($skillart as $k=>$v){
                $data[$k]['id'] = $v->id;
                $data[$k]['title'] = $v->title;
                $data[$k]['pic'] = Yii::$app->params['pic_url'].$v->pic;
                $data[$k]['art_time'] = $v->art_time;
                $data[$k]['art_address'] = $v->art_address;
                $data[$k]['art_intro'] = $v->art_intro;
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
        $detail = Skillart::findOne($_POST['id']);
        if(!empty($detail)){
            $data['id'] = $detail->id;
            $data['title'] = $detail->title;
            $data['pic'] = Yii::$app->params['pic_url'].$detail->pic;
            $data['art_time'] = $detail->art_time;
            $data['art_address'] = $detail->art_address;
            $data['art_intro'] = $detail->art_intro;
        }
            
        if(!empty($data)){
            Response::show(2000,'success',$data);
        }else{
            Response::show(2004,'filed'); 
        }
    }
}
