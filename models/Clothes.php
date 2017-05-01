<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%hl_clothes}}".
 *
 * @property string $id
 * @property string $cloth_name
 * @property string $model
 * @property string $material
 * @property string $fashion
 * @property string $belong
 * @property string $cloth_pic
 * @property integer $create_time
 * @property integer $update_time
 */
class Clothes extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hl_clothes}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cloth_name', 'model', 'material', 'fashion', 'belong'], 'required'],
            [['create_time', 'update_time'], 'integer'],
            [['cloth_name', 'model', 'material', 'fashion', 'belong'], 'string', 'max' => 255],
            [['file'],'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '衣服id',
            'cloth_name' => '衣服名称',
            'model' => '型号',
            'material' => '制作材料',
            'fashion' => '款式',
            'belong' => '归属店铺',
            'cloth_pic' => '衣服图片',
            'create_time' => '添加时间',
            'update_time' => '修改时间',
        ];
    }
}
