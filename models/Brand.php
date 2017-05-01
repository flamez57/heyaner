<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%hl_brand}}".
 *
 * @property string $id
 * @property string $brand_pic
 * @property string $url
 * @property string $interaction_id
 * @property integer $status
 * @property integer $where
 * @property integer $create_time
 * @property integer $update_time
 */
class Brand extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hl_brand}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url', 'interaction_id', 'status'], 'required'],
            [['interaction_id', 'status', 'where', 'create_time', 'update_time'], 'integer'],
            [['url'], 'string', 'max' => 255],
            [['file'],'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand_pic' => '图片地址',
            'url' => '图片链接地址',
            'interaction_id' => '关联id',
            'status' => '状态 0 正常  1禁用',
            'where' => '显示位置 1主页2手艺页',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
