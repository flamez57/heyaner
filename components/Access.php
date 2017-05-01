<?php
namespace app\components;

use yii\rbac\DbManager;

class Access extends DbManager
{
	// 创建操作许可 Permiassion
    public function createPermission($item)
    {
        $auth = Yii::$app->authManager;

        $createPost = $auth->createPermission($item);
        $createPost->description = '创建了 ' . $item . ' 许可';
        $auth->add($createPost);
    }

    //创建一个 角色吧 roles
    public function createRole($item)
    {
        $auth = Yii::$app->authManager;

        $role = $auth->createRole($item);
        $role->description = '创建了 ' . $item . ' 角色';
        $auth->add($role);
    }

    //给角色分配许可
    static public function createEmpowerment($items)
    {
        $auth = Yii::$app->authManager;

        $parent = $auth->createRole($items['name']);
        $child = $auth->createPermission($items['description']);

        $auth->addChild($parent, $child);
    }

    //给角色分配用户
    static public function assign($item)
    {
        $auth = Yii::$app->authManager;
        $reader = $auth->createRole($item['name']);
        $auth->assign($reader, $item['description']);
    }


    //验证用户是否有权限
    public function beforeAction($action)
    {
        $action = Yii::$app->controller->action->id;
        if(\Yii::$app->user->can($action)){
            return true;
        }else{
            throw new \yii\web\UnauthorizedHttpException('对不起，您现在还没获此操作的权限');
        }
    }


}