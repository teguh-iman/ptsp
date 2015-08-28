<?php

namespace backend\models\base;

use Yii;

/**
 * This is the base model class for table "dokumen_pendukung".
 *
 * @property integer $id
 * @property string $kategori
 * @property integer $izin_id
 * @property string $isi
 * @property string $file
 * @property integer $urutan
 * @property string $tipe
 *
 * @property \backend\models\Izin $izin
 */
class DokumenPendukung extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dokumen_pendukung';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'kategori' => Yii::t('app', 'Kategori'),
            'izin_id' => Yii::t('app', 'Izin ID'),
            'isi' => Yii::t('app', 'Isi'),
            'file' => Yii::t('app', 'File'),
            'urutan' => Yii::t('app', 'Urutan'),
            'tipe' => Yii::t('app', 'Tipe'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIzin()
    {
        return $this->hasOne(\backend\models\Izin::className(), ['id' => 'izin_id']);
    }

    /**
     * @inheritdoc
     * @return \backend\models\DokumenPendukungQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\DokumenPendukungQuery(get_called_class());
    }
}
