<?php

namespace backend\models\base;

use Yii;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "perizinan_alur".
 *
 * @property integer $id
 * @property integer $perizinan_id
 * @property integer $dokumen_izin_id
 * @property integer $dokumen_pendukung_id
 * @property integer $pelaksana_id
 * @property string $isi_dok_pendukung
 * @property string $tanggal_proses
 * @property string $pelaksana
 * @property string $dok_input
 * @property string $dok_proses
 * @property string $dok_output
 * @property string $nama_modul
 * @property string $nama_berkas
 * @property string $berkas
 * @property string $berkas_seo
 * @property string $status
 * @property string $tanggal
 * @property string $valid
 * @property string $keterangan
 * @property string $mulai
 * @property string $selesai
 * @property string $jarak
 * @property string $mekanisme_cek
 * @property string $aktif
 * @property string $duration
 * @property string $registrasi_action
 * @property string $jarak_sebelum
 * @property string $jarak_sekarang
 * @property string $type
 *
 * @property \backend\models\DokumenIzin $dokumenIzin
 * @property \backend\models\DokumenPendukung $dokumenPendukung
 * @property \backend\models\Pelaksana $pelaksana0
 * @property \backend\models\Perizinan $perizinan
 */
class PerizinanAlur extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'perizinan_alur';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'perizinan_id' => Yii::t('app', 'Perizinan ID'),
            'dokumen_izin_id' => Yii::t('app', 'Dokumen Izin ID'),
            'dokumen_pendukung_id' => Yii::t('app', 'Dokumen Pendukung ID'),
            'pelaksana_id' => Yii::t('app', 'Pelaksana ID'),
            'isi_dok_pendukung' => Yii::t('app', 'Isi Dok Pendukung'),
            'tanggal_proses' => Yii::t('app', 'Tanggal Proses'),
            'pelaksana' => Yii::t('app', 'Pelaksana'),
            'dok_input' => Yii::t('app', 'Dok Input'),
            'dok_proses' => Yii::t('app', 'Dok Proses'),
            'dok_output' => Yii::t('app', 'Dok Output'),
            'nama_modul' => Yii::t('app', 'Nama Modul'),
            'nama_berkas' => Yii::t('app', 'Nama Berkas'),
            'berkas' => Yii::t('app', 'Berkas'),
            'berkas_seo' => Yii::t('app', 'Berkas Seo'),
            'status' => Yii::t('app', 'Status'),
            'tanggal' => Yii::t('app', 'Tanggal'),
            'valid' => Yii::t('app', 'Valid'),
            'keterangan' => Yii::t('app', 'Keterangan'),
            'mulai' => Yii::t('app', 'Mulai'),
            'selesai' => Yii::t('app', 'Selesai'),
            'jarak' => Yii::t('app', 'Jarak'),
            'mekanisme_cek' => Yii::t('app', 'Mekanisme Cek'),
            'aktif' => Yii::t('app', 'Aktif'),
            'duration' => Yii::t('app', 'Duration'),
            'registrasi_action' => Yii::t('app', 'Registrasi Action'),
            'jarak_sebelum' => Yii::t('app', 'Jarak Sebelum'),
            'jarak_sekarang' => Yii::t('app', 'Jarak Sekarang'),
            'type' => Yii::t('app', 'Type'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDokumenIzin()
    {
        return $this->hasOne(\backend\models\DokumenIzin::className(), ['id' => 'dokumen_izin_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDokumenPendukung()
    {
        return $this->hasOne(\backend\models\DokumenPendukung::className(), ['id' => 'dokumen_pendukung_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPelaksana0()
    {
        return $this->hasOne(\backend\models\Pelaksana::className(), ['id' => 'pelaksana_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerizinan()
    {
        return $this->hasOne(\backend\models\Perizinan::className(), ['id' => 'perizinan_id']);
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
     * @return \backend\models\PerizinanAlurQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\PerizinanAlurQuery(get_called_class());
    }
}
