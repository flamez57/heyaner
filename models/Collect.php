<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%hl_collect}}".
 *
 * @property string $id
 * @property string $name
 * @property string $pic
 * @property string $fashion
 * @property string $material
 * @property string $type
 * @property string $craft
 * @property integer $show_time
 * @property string $show_address
 * @property string $intro
 * @property integer $create_time
 * @property integer $update_time
 */
class Collect extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hl_collect}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'fashion', 'material', 'type', 'craft', 'show_address', 'intro'], 'required'],
            [['show_time', 'create_time', 'update_time'], 'integer'],
            [['intro'], 'string'],
            [['name', 'fashion', 'material', 'type', 'craft', 'show_address'], 'string', 'max' => 255],
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
            'name' => '藏品名',
            'pic' => '藏品图片',
            'fashion' => '款式',
            'material' => '材质',
            'type' => '类型',
            'craft' => '工艺',
            'show_time' => '展览时间',
            'show_address' => '展览地址',
            'intro' => '简单介绍',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
