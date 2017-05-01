<?php

namespace app\flame\api\controllers;
header("Access-Control-Allow-Origin:*");
use Yii;
use app\models\Skill;
use yii\web\Controller;
use vendor\funcs\Response;  //引入格式化数据的类

/**
 * Default controller for the `api` module
 */
class SkillController extends Controller
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
        $skill = Skill::find()->limit($_POST['pagesize'])->offset($offset)->all();
        if(!empty($skill)){
            foreach($skill as $k=>$v){
                $data[$k]['id'] = $v->id;
                $data[$k]['skill'] = $v->skill;
                $data[$k]['pic'] = Yii::$app->params['pic_url'].$v->pic;
                $data[$k]['kind'] = $v->kind;
                $data[$k]['use'] = $v->use;
                $data[$k]['intro'] = $v->intro;
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
        $detail = Skill::findOne($_POST['id']);
        if(!empty($detail)){
            $data['id'] = $detail->id;
            $data['skill'] = $detail->skill;
            $data['pic'] = Yii::$app->params['pic_url'].$detail->pic;
            $data['kind'] = $detail->kind;
            $data['use'] = $detail->use;
            $data['intro'] = $detail->intro;
        }
            
        if(!empty($data)){
            Response::show(2000,'success',$data);
        }else{
            Response::show(2004,'filed'); 
        }
    }
}
