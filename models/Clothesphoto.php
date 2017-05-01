<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%hl_clothesphoto}}".
 *
 * @property string $id
 * @property integer $coat_id
 * @property string $photo
 * @property integer $create_time
 * @property integer $update_time
 */
class Clothesphoto extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hl_clothesphoto}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['coat_id'], 'required'],
            [['id', 'coat_id', 'create_time', 'update_time'], 'integer'],
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
            'coat_id' => '衣服id',
            'photo' => '图片地址',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
