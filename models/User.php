<?php

namespace app\models;

use Yii;
use \yii\db\ActiveRecord;
use \yii\web\IdentityInterface;
/**
 * This is the model class for table "{{%hl_user}}".
 *
 * @property integer $id
 * @property integer $pid
 * @property string $username
 * @property string $password
 * @property integer $type
 * @property integer $created_time
 * @property integer $updated_time
 * @property integer $status
 * @property string $login_ip
 * @property integer $login_time
 * @property integer $login_count
 * @property integer $update_password
 */
class User extends ActiveRecord implements IdentityInterface
{
    public $authKey;
    public $accessToken;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hl_user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'type', 'created_time', 'updated_time', 'status', 'login_time', 'login_count', 'update_password'], 'integer'],
            [['username', 'password', 'created_time', 'updated_time', 'login_ip', 'login_time'], 'required'],
            [['username'], 'string', 'max' => 70],
            [['password'], 'string', 'max' => 100],
            [['login_ip'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pid' => 'Pid',
            'username' => 'Username',
            'password' => 'Password',
            'type' => 'Type',
            'created_time' => 'Created Time',
            'updated_time' => 'Updated Time',
            'status' => 'Status',
            'login_ip' => 'Login Ip',
            'login_time' => 'Login Time',
            'login_count' => 'Login Count',
            'update_password' => 'Update Password',
        ];
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        // $this->password = md5($password);
        Yii::$app->getSecurity()->generatePasswordHash($password);
    }

    /*
     *
     */
    public static function findIdentity($id){
        return static::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null) {
        $user = Users::find()->where(array('accessToken' => $token))->one();
        if ($user) {
            return new static($user);
        }
        return null;
    }
    /*
     *find by username
     */
    public static function findByUsername($username)
    {
        $user = User::find()
        ->where(['username'=>$username])
        ->asArray()
        ->one();
        if($user){
            return new static($user);
        }
        return null;
    }
    public static function findById($id) {
        $user = Users::find()->where(array('id' => $id))->asArray()->one();
        if ($user) {
            return new static($user);
        }

        return null;
    }

    /**
     * @inheritdoc
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey() {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey) {
        return $this->authKey === $authKey;
    }
    /*
     * Validates password
     *@param string $password password to validate
     *@return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        // return $this->password === $password;
        return Yii::$app->getSecurity()->validatePassword($password,$this->password);
    }

    //辅助验证
    public function createhashpasswd()
    {
        echo Yii::$app->getSecurity()->generatePasswordHash('123');
    }
}
// CREATE TABLE `user` (
//   `id` int(11) NOT NULL AUTO_INCREMENT,
//   `pid` int(11) NOT NULL DEFAULT '0' COMMENT '父id',
//   `username` char(70) NOT NULL COMMENT '用户名',
//   `password` char(70) NOT NULL COMMENT '密码',
//   `type` tinyint(4) NOT NULL DEFAULT '4' COMMENT '类型(1:总店,2:门店,3:管理员)',
//   `created_time` int(11) NOT NULL COMMENT '注册时间',
//   `updated_time` int(11) NOT NULL COMMENT '修改时间',
//   `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '封禁状态，0禁止1正常',
//   `login_ip` char(20) NOT NULL COMMENT '登录ip',
//   `login_time` int(11) NOT NULL COMMENT '上一次登录时间',
//   `login_count` int(10) NOT NULL DEFAULT '0' COMMENT '登陆次数',
//   `update_password` int(10) NOT NULL DEFAULT '0' COMMENT '修改密码次数',
//   PRIMARY KEY (`id`),
//   KEY `pid` (`pid`),
//   KEY `username` (`username`),
//   KEY `type` (`type`),
//   KEY `status` (`status`)
// ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='登录管理表';