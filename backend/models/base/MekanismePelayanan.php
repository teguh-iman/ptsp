<?php

namespace backend\models\base;

use Yii;

/**
 * This is the base model class for table "mekanisme_pelayanan".
 *
 * @property integer $id
 * @property integer $izin_id
 * @property string $isi
 * @property string $berkas
 * @property integer $pelaksana_id
 * @property integer $dok_input
 * @property integer $dok_proses
 * @property integer $dok_output
 * @property integer $durasi
 * @property integer $dur_sat
 * @property integer $dur_sat1
 * @property integer $dur_sat2
 * @property integer $dur_sat3
 * @property string $durasi_satuan
 * @property integer $urutan
 * @property string $dokpendukung_tipe
 * @property string $aktif
 * @property string $petugas_cek
 *
 * @property \backend\models\DokumenIzin $dokInput
 * @property \backend\models\DokumenIzin $dokProses
 * @property \backend\models\DokumenIzin $dokOutput
 * @property \backend\models\Izin $izin
 * @property \backend\models\Pelaksana $pelaksana
 * @property \backend\models\PerizinanProses[] $perizinanProses
 */
class MekanismePelayanan extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mekanisme_pelayanan';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'izin_id' => Yii::t('app', 'Izin ID'),
            'isi' => Yii::t('app', 'Isi'),
            'berkas' => Yii::t('app', 'Berkas'),
            'pelaksana_id' => Yii::t('app', 'Pelaksana ID'),
            'dok_input' => Yii::t('app', 'Dok Input'),
            'dok_proses' => Yii::t('app', 'Dok Proses'),
            'dok_output' => Yii::t('app', 'Dok Output'),
            'durasi' => Yii::t('app', 'Durasi'),
            'dur_sat' => Yii::t('app', 'Dur Sat'),
            'dur_sat1' => Yii::t('app', 'Dur Sat1'),
            'dur_sat2' => Yii::t('app', 'Dur Sat2'),
            'dur_sat3' => Yii::t('app', 'Dur Sat3'),
            'durasi_satuan' => Yii::t('app', 'Durasi Satuan'),
            'urutan' => Yii::t('app', 'Urutan'),
            'dokpendukung_tipe' => Yii::t('app', 'Dokpendukung Tipe'),
            'aktif' => Yii::t('app', 'Aktif'),
            'petugas_cek' => Yii::t('app', 'Petugas Cek'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDokInput()
    {
        return $this->hasOne(\backend\models\DokumenIzin::className(), ['id' => 'dok_input']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDokProses()
    {
        return $this->hasOne(\backend\models\DokumenIzin::className(), ['id' => 'dok_proses']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDokOutput()
    {
        return $this->hasOne(\backend\models\DokumenIzin::className(), ['id' => 'dok_output']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIzin()
    {
        return $this->hasOne(\backend\models\Izin::className(), ['id' => 'izin_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPelaksana()
    {
        return $this->hasOne(\backend\models\Pelaksana::className(), ['id' => 'pelaksana_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerizinanProses()
    {
        return $this->hasMany(\backend\models\PerizinanProses::className(), ['mekanisme_pelayanan_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \backend\models\MekanismePelayananQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\MekanismePelayananQuery(get_called_class());
    }
}
