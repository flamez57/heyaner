<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%hl_shop}}".
 *
 * @property string $id
 * @property string $store
 * @property string $address
 * @property string $phone
 * @property string $shop_time
 * @property string $store_pic
 * @property string $intro
 * @property integer $create_time
 * @property integer $update_time
 */
class Shop extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hl_shop}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['store', 'address', 'phone', 'intro'], 'required'],
            [['intro'], 'string'],
            [['create_time', 'update_time'], 'integer'],
            [['store', 'address', 'store_pic'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 13],
            [['shop_time'], 'string', 'max' => 15],
            [['file'],'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '店铺id',
            'store' => '店铺名称',
            'address' => '店铺地址',
            'phone' => '联系方式',
            'shop_time' => '营业时间',
            'store_pic' => '店面图片',
            'intro' => '店铺简单介绍',
            'create_time' => '创建时间',
            'update_time' => '修改时间',
        ];
    }
}
