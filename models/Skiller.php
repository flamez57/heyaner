<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%hl_skiller}}".
 *
 * @property string $id
 * @property string $name
 * @property string $skill
 * @property string $workage
 * @property string $intro
 * @property integer $create_time
 * @property integer $update_time
 */
class Skiller extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hl_skiller}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'skill', 'workage', 'intro'], 'required'],
            [['intro'], 'string'],
            [['create_time', 'update_time'], 'integer'],
            [['name', 'skill'], 'string', 'max' => 255],
            [['workage'], 'string', 'max' => 100],
            [['file'],'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '手艺人id',
            'name' => '艺人名字',
            'pic'=>'艺人照片',
            'skill' => '技艺',
            'workage' => '工龄',
            'intro' => '简介',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
