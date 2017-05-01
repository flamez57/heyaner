<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%hl_shophoto}}".
 *
 * @property string $id
 * @property integer $shop_id
 * @property string $photo
 * @property integer $create_time
 * @property integer $update_time
 */
class Shophoto extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hl_shophoto}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shop_id'], 'required'],
            [['shop_id', 'create_time', 'update_time'], 'integer'],
            // [['photo'], 'string', 'max' => 255],
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
            'shop_id' => '店铺id',
            'photo' => '图片地址',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
