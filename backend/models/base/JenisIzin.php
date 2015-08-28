<?php

namespace backend\models\base;

use Yii;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "jenis_izin".
 *
 * @property integer $id
 * @property integer $bidang_id
 * @property string $nama
 * @property string $action
 *
 * @property \backend\models\Bidang $bidang
 */
class JenisIzin extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jenis_izin';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'bidang_id' => Yii::t('app', 'Bidang ID'),
            'nama' => Yii::t('app', 'Nama'),
            'action' => Yii::t('app', 'Action'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBidang()
    {
        return $this->hasOne(\backend\models\Bidang::className(), ['id' => 'bidang_id']);
    }

/**
     * @inheritdoc
     * @return type array
     */ 
    public function behaviors()
    {
        return [
            [
                'class' => UUIDBehavior::className(),
                'column' => 'id',
            ],
        ];
    }

    /**
     * @inheritdoc
     * @return \backend\models\JenisIzinQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\JenisIzinQuery(get_called_class());
    }
}
