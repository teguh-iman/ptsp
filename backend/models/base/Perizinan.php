<?php

namespace backend\models\base;

use Yii;

/**
 * This is the base model class for table "perizinan".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property integer $pemohon_id
 * @property integer $id_groupizin
 * @property integer $izin_id
 * @property integer $no_urut
 * @property string $tanggal_mohon
 * @property string $no_izin
 * @property string $berkas_noizin
 * @property string $tanggal_izin
 * @property string $tanggal_expired
 * @property string $status
 * @property string $aktif
 * @property string $registrasi_urutan
 * @property string $nomor_sp_rt_rw
 * @property string $tanggal_sp_rt_rw
 * @property string $peruntukan
 * @property string $nama_perusahaan
 * @property string $tanggal_cek_lapangan
 * @property string $petugas_cek
 * @property string $status_daftar
 * @property integer $petugas_daftar_id
 * @property integer $lokasi_id
 * @property string $keterangan
 * @property string $qr_code
 * @property string $tanggal_pertemuan
 * @property string $pengambilan_tanggal
 * @property string $pengambilan_jam
 *
 * @property \backend\models\IzinSiup[] $izinSiups
 * @property \backend\models\User $pemohon
 * @property \backend\models\User $petugasDaftar
 * @property \backend\models\Izin $izin
 * @property \backend\models\Perizinan $parent
 * @property \backend\models\Perizinan[] $perizinans
 * @property \backend\models\PerizinanProses[] $perizinanProses
 */
class Perizinan extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'perizinan';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'pemohon_id' => Yii::t('app', 'Pemohon ID'),
            'id_groupizin' => Yii::t('app', 'Id Groupizin'),
            'izin_id' => Yii::t('app', 'Izin ID'),
            'no_urut' => Yii::t('app', 'No Urut'),
            'tanggal_mohon' => Yii::t('app', 'Tanggal Mohon'),
            'no_izin' => Yii::t('app', 'No Izin'),
            'jumlah_tahap' => Yii::t('app', 'Jumlah Tahap'),
            'berkas_noizin' => Yii::t('app', 'Berkas Noizin'),
            'tanggal_izin' => Yii::t('app', 'Tanggal Izin'),
            'tanggal_expired' => Yii::t('app', 'Tanggal Expired'),
            'status' => Yii::t('app', 'Status'),
            'aktif' => Yii::t('app', 'Aktif'),
            'registrasi_urutan' => Yii::t('app', 'Registrasi Urutan'),
            'nomor_sp_rt_rw' => Yii::t('app', 'Nomor Sp Rt Rw'),
            'tanggal_sp_rt_rw' => Yii::t('app', 'Tanggal Sp Rt Rw'),
            'peruntukan' => Yii::t('app', 'Peruntukan'),
            'nama_perusahaan' => Yii::t('app', 'Nama Perusahaan'),
            'tanggal_cek_lapangan' => Yii::t('app', 'Tanggal Cek Lapangan'),
            'petugas_cek' => Yii::t('app', 'Petugas Cek'),
            'status_daftar' => Yii::t('app', 'Status Daftar'),
            'petugas_daftar_id' => Yii::t('app', 'Petugas Daftar ID'),
            'lokasi_id' => Yii::t('app', 'Lokasi ID'),
            'keterangan' => Yii::t('app', 'Keterangan'),
            'qr_code' => Yii::t('app', 'Qr Code'),
            'tanggal_pertemuan' => Yii::t('app', 'Tanggal Pertemuan'),
            'pengambilan_tanggal' => Yii::t('app', 'Pengambilan Tanggal'),
            'pengambilan_jam' => Yii::t('app', 'Pengambilan Jam'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIzinSiups()
    {
        return $this->hasMany(\backend\models\IzinSiup::className(), ['perizinan_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPemohon()
    {
        return $this->hasOne(\backend\models\User::className(), ['id' => 'pemohon_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPetugasDaftar()
    {
        return $this->hasOne(\backend\models\User::className(), ['id' => 'petugas_daftar_id']);
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
    public function getParent()
    {
        return $this->hasOne(\backend\models\Perizinan::className(), ['id' => 'parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerizinans()
    {
        return $this->hasMany(\backend\models\Perizinan::className(), ['parent_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerizinanProses()
    {
        return $this->hasMany(\backend\models\PerizinanProses::className(), ['perizinan_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \backend\models\PerizinanQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\PerizinanQuery(get_called_class());
    }
}
