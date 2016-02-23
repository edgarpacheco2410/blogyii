<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tags".
 *
 * @property string $id
 * @property string $tagName
 * @property integer $counter
 */
class Tags extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tags';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tagName', 'counter'], 'required'],
            [['counter'], 'integer'],
            [['tagName'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'tagName' => Yii::t('app', 'Tag Name'),
            'counter' => Yii::t('app', 'Counter'),
        ];
    }
}
