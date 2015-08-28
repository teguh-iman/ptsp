<?php

namespace backend\models\base;

use Yii;

/**
 * This is the base model class for table "lokasi".
 *
 * @property integer $id
 * @property string $kode
 * @property string $nama
 * @property string $keterangan
 * @property double $latitude
 * @property double $longtitude
 * @property integer $propinsi
 * @property string $kabupaten_kota
 * @property string $kecamatan
 * @property string $kelurahan
 * @property string $aktif
 */
class Lokasi extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lokasi';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'kode' => Yii::t('app', 'Kode'),
            'nama' => Yii::t('app', 'Nama'),
            'keterangan' => Yii::t('app', 'Keterangan'),
            'latitude' => Yii::t('app', 'Latitude'),
            'longtitude' => Yii::t('app', 'Longtitude'),
            'propinsi' => Yii::t('app', 'Propinsi'),
            'kabupaten_kota' => Yii::t('app', 'Kabupaten Kota'),
            'kecamatan' => Yii::t('app', 'Kecamatan'),
            'kelurahan' => Yii::t('app', 'Kelurahan'),
            'aktif' => Yii::t('app', 'Aktif'),
        ];
    }

    /**
     * @inheritdoc
     * @return \backend\models\LokasiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\LokasiQuery(get_called_class());
    }
}
