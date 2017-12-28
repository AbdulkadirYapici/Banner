<?php

namespace kouosl\Banner\models;

use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property integer $id
 * @property string $url
 * @property string $img
 * @property string $createtime
 * @property string $title
 * @property integer $user_id
 * @property integer $status
 *
 * @property User $user
 * @property Report[] $reports
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url', 'img', 'title', 'user_id', 'status'], 'required'],
            [['createtime'], 'safe'],
            [['user_id', 'status'], 'integer'],
            [['url', 'img', 'title'], 'string', 'max' => 128],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => 'Url',
            'img' => 'Img',
            'createtime' => 'Createtime',
            'title' => 'Title',
            'user_id' => 'User ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReports()
    {
        return $this->hasMany(Report::className(), ['banner_id' => 'id']);
    }
}
