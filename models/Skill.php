<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%hl_skill}}".
 *
 * @property string $id
 * @property string $skill
 * @property string $kind
 * @property string $use
 * @property string $intro
 * @property integer $create_time
 * @property integer $update_time
 */
class Skill extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hl_skill}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['skill', 'kind', 'use', 'intro'], 'required'],
            [['intro'], 'string'],
            [['create_time', 'update_time'], 'integer'],
            [['skill', 'kind', 'use'], 'string', 'max' => 255],
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
            'skill' => '工艺名',
            'pic' => '手艺图片',
            'kind' => '种类',
            'use' => '用途',
            'intro' => '简介',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
