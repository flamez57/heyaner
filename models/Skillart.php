<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%hl_skillart}}".
 *
 * @property string $id
 * @property string $title
 * @property string $art_time
 * @property string $art_address
 * @property string $art_intro
 * @property integer $create_time
 * @property integer $update_time
 */
class Skillart extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hl_skillart}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'art_time', 'art_address', 'art_intro'], 'required'],
            [['art_time', 'create_time', 'update_time'], 'integer'],
            [['art_intro'], 'string'],
            [['title', 'art_address'], 'string', 'max' => 255],
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
            'title' => '活动主题',
            'pic'=>'活动图片',
            'art_time' => '活动时间',
            'art_address' => '活动地点',
            'art_intro' => '活动简介',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
