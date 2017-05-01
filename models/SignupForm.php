<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\User;
/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class SignupForm extends Model
{
    public $username;
    public $password;
    public $passwords;
    public $rememberMe = false;

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required','message' => '用户名不能为空'],
            ['username', 'unique', 'targetClass' => 'app\models\User', 'message' => '用户名已存在'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            // ['username','match','pattern'=>'/^[a-z]{1,}$/','message'=>'用户名必须为字母'],  
            // ['password','match','pattern'=>'/^[0-9]{6,12}$/','message'=>'密码必须是数字,且大于6为小于12位'], 

            ['password', 'required','message' => '密码不能为空'],
            ['password', 'string', 'min' => 6],
            [['passwords'], 'compare','compareAttribute'=>'password','message' => '两次密码不一致'],
        ];
    }

    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            // $user->username = 'asdf';            
            // $user->password = 'adsfas';            
            $user->username = $this->username;            
            $user->password = Yii::$app->getSecurity()->generatePasswordHash($this->password);
            $user->updated_time = time();
            $user->login_ip = $_SERVER["REMOTE_ADDR"];
            $user->login_time = time();  
            $user->created_time = time();  
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}
