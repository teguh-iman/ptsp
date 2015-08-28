<?php

namespace backend\models\base;

use Yii;

/**
 * This is the base model class for table "izin".
 *
 * @property integer $id
 * @property string $jenis
 * @property integer $bidang_id
 * @property string $nama
 * @property string $kode
 * @property string $fno_surat
 * @property string $aktif
 * @property integer $wewenang_id
 * @property string $cek_lapangan
 * @property string $cek_sprtrw
 * @property string $cek_obyek
 * @property string $cek_perusahaan
 * @property integer $durasi
 * @property string $durasi_satuan
 * @property string $latar_belakang
 * @property string $persyaratan
 * @property string $mekanisme
 * @property string $pengaduan
 * @property string $dasar_hukum
 * @property string $definisi
 * @property double $biaya
 * @property string $brosur
 * @property integer $arsip_id
 * @property string $type
 * @property string $action
 *
 * @property \backend\models\DokumenIzin[] $dokumenIzins
 * @property \backend\models\DokumenPendukung[] $dokumenPendukungs
 * @property \backend\models\Bidang $bidang
 * @property \backend\models\IzinSiup[] $izinSiups
 * @property \backend\models\MekanismePelayanan[] $mekanismePelayanans
 * @property \backend\models\Perizinan[] $perizinans
 */
class Izin extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'izin';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'jenis' => Yii::t('app', 'Jenis'),
            'bidang_id' => Yii::t('app', 'Bidang ID'),
            'nama' => Yii::t('app', 'Nama'),
            'kode' => Yii::t('app', 'Kode'),
            'fno_surat' => Yii::t('app', 'Fno Surat'),
            'aktif' => Yii::t('app', 'Aktif'),
            'wewenang_id' => Yii::t('app', 'Wewenang ID'),
            'cek_lapangan' => Yii::t('app', 'Cek Lapangan'),
            'cek_sprtrw' => Yii::t('app', 'Cek Sprtrw'),
            'cek_obyek' => Yii::t('app', 'Cek Obyek'),
            'cek_perusahaan' => Yii::t('app', 'Cek Perusahaan'),
            'durasi' => Yii::t('app', 'Durasi'),
            'durasi_satuan' => Yii::t('app', 'Durasi Satuan'),
            'latar_belakang' => Yii::t('app', 'Latar Belakang'),
            'persyaratan' => Yii::t('app', 'Persyaratan'),
            'mekanisme' => Yii::t('app', 'Mekanisme'),
            'pengaduan' => Yii::t('app', 'Pengaduan'),
            'dasar_hukum' => Yii::t('app', 'Dasar Hukum'),
            'definisi' => Yii::t('app', 'Definisi'),
            'biaya' => Yii::t('app', 'Biaya'),
            'brosur' => Yii::t('app', 'Brosur'),
            'arsip_id' => Yii::t('app', 'Arsip ID'),
            'type' => Yii::t('app', 'Type'),
            'action' => Yii::t('app', 'Action'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDokumenIzins()
    {
        return $this->hasMany(\backend\models\DokumenIzin::className(), ['izin_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDokumenPendukungs()
    {
        return $this->hasMany(\backend\models\DokumenPendukung::className(), ['izin_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBidang()
    {
        return $this->hasOne(\backend\models\Bidang::className(), ['id' => 'bidang_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIzinSiups()
    {
        return $this->hasMany(\backend\models\IzinSiup::className(), ['izin_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMekanismePelayanans()
    {
        return $this->hasMany(\backend\models\MekanismePelayanan::className(), ['izin_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerizinans()
    {
        return $this->hasMany(\backend\models\Perizinan::className(), ['izin_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \backend\models\IzinQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\IzinQuery(get_called_class());
    }
}
