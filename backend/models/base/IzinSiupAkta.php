<?php

namespace backend\models\base;

use Yii;

/**
 * This is the base model class for table "izin_siup_akta".
 *
 * @property integer $id
 * @property integer $izin_siup_id
 * @property string $nomor_akta
 * @property string $tanggal_akta
 * @property string $nomor_pengesahan
 * @property string $tanggal_pengesahan
 *
 * @property \backend\models\IzinSiup $izinSiup
 */
class IzinSiupAkta extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'izin_siup_akta';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'izin_siup_id' => Yii::t('app', 'Izin Siup ID'),
            'nomor_akta' => Yii::t('app', 'Nomor Akta'),
            'tanggal_akta' => Yii::t('app', 'Tanggal Akta'),
            'nomor_pengesahan' => Yii::t('app', 'Nomor Pengesahan'),
            'tanggal_pengesahan' => Yii::t('app', 'Tanggal Pengesahan'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIzinSiup()
    {
        return $this->hasOne(\backend\models\IzinSiup::className(), ['id' => 'izin_siup_id']);
    }

    /**
     * @inheritdoc
     * @return \backend\models\IzinSiupAktaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\IzinSiupAktaQuery(get_called_class());
    }
}
