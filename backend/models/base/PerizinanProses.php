<?php

namespace backend\models\base;

use Yii;

/**
 * This is the base model class for table "perizinan_proses".
 *
 * @property integer $id
 * @property integer $perizinan_id
 * @property integer $mekanisme_pelayanan_id
 * @property integer $pelaksana_id
 * @property integer $urutan
 * @property integer $active
 * @property string $tanggal_proses
 * @property string $isi_dokumen
 * @property string $pelaksana
 * @property string $dok_input
 * @property string $dok_proses
 * @property string $dok_output
 * @property string $nama_berkas
 * @property string $berkas
 * @property string $berkas_seo
 * @property string $status
 * @property string $keterangan
 * @property string $tanggal
 * @property string $valid
 * @property string $mulai
 * @property string $selesai
 * @property string $jarak
 * @property string $mekanisme_cek
 * @property string $aktif
 * @property string $jarak_sebelum
 * @property string $jarak_sekarang
 * @property string $type
 *
 * @property \backend\models\MekanismePelayanan $mekanismePelayanan
 * @property \backend\models\Pelaksana $pelaksana0
 * @property \backend\models\Perizinan $perizinan
 */
class PerizinanProses extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'perizinan_proses';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'perizinan_id' => Yii::t('app', 'Perizinan ID'),
            'mekanisme_pelayanan_id' => Yii::t('app', 'Mekanisme Pelayanan ID'),
            'pelaksana_id' => Yii::t('app', 'Pelaksana ID'),
            'urutan' => Yii::t('app', 'Urutan'),
            'active' => Yii::t('app', 'Active'),
            'tanggal_proses' => Yii::t('app', 'Tanggal Proses'),
            'isi_dokumen' => Yii::t('app', 'Isi Dokumen'),
            'pelaksana' => Yii::t('app', 'Pelaksana'),
            'dok_input' => Yii::t('app', 'Dok Input'),
            'dok_proses' => Yii::t('app', 'Dok Proses'),
            'dok_output' => Yii::t('app', 'Dok Output'),
            'nama_berkas' => Yii::t('app', 'Nama Berkas'),
            'berkas' => Yii::t('app', 'Berkas'),
            'berkas_seo' => Yii::t('app', 'Berkas Seo'),
            'status' => Yii::t('app', 'Status'),
            'keterangan' => Yii::t('app', 'Keterangan'),
            'tanggal' => Yii::t('app', 'Tanggal'),
            'valid' => Yii::t('app', 'Valid'),
            'mulai' => Yii::t('app', 'Mulai'),
            'selesai' => Yii::t('app', 'Selesai'),
            'jarak' => Yii::t('app', 'Jarak'),
            'mekanisme_cek' => Yii::t('app', 'Mekanisme Cek'),
            'aktif' => Yii::t('app', 'Aktif'),
            'jarak_sebelum' => Yii::t('app', 'Jarak Sebelum'),
            'jarak_sekarang' => Yii::t('app', 'Jarak Sekarang'),
            'type' => Yii::t('app', 'Type'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMekanismePelayanan()
    {
        return $this->hasOne(\backend\models\MekanismePelayanan::className(), ['id' => 'mekanisme_pelayanan_id']);
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
     * @return \backend\models\PerizinanProsesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\PerizinanProsesQuery(get_called_class());
    }
}
