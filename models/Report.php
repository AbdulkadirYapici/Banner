<?php

namespace kouosl\Banner\models;

use Yii;

/**
 * This is the model class for table "report".
 *
 * @property integer $id
 * @property integer $banner_id
 * @property integer $view
 * @property integer $clicks
 * @property string $ip
 *
 * @property Banner $banner
 */
class Report extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'report';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['banner_id', 'view', 'clicks', 'ip'], 'required'],
            [['banner_id', 'view', 'clicks'], 'integer'],
            [['ip'], 'string', 'max' => 64],
            [['banner_id'], 'exist', 'skipOnError' => true, 'targetClass' => Banner::className(), 'targetAttribute' => ['banner_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'banner_id' => 'Banner ID',
            'view' => 'View',
            'clicks' => 'Clicks',
            'ip' => 'Ip',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBanner()
    {
        return $this->hasOne(Banner::className(), ['id' => 'banner_id']);
    }
}
