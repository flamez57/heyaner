<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%hl_thing}}".
 *
 * @property string $id
 * @property string $title
 * @property string $content
 * @property integer $create_time
 * @property integer $update_time
 */
class Thing extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hl_thing}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'title', 'content'], 'required'],
            [['id', 'create_time', 'update_time'], 'integer'],
            [['content'], 'string'],
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
