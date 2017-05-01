<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%hl_things}}".
 *
 * @property string $id
 * @property string $title
 * @property string $content
 * @property integer $create_time
 * @property integer $update_time
 */
class Things extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hl_things}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['content'], 'string'],
            [['create_time', 'update_time'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'content' => '内容',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
