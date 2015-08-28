<?php

namespace backend\models\base;

use Yii;

/**
 * This is the base model class for table "registrasi".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property integer $user_id
 * @property integer $bidang_id
 * @property string $no_identitas
 * @property integer $urutan
 * @property string $tanggal_permohonan
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
 * @property string $status_daftar
 * @property string $petugas_daftar
 * @property integer $lokasi_id
 * @property string $keterangan
 * @property string $qr_code
 * @property string $tanggal_pertemuan
 * @property string $tanggal_pengambilan
 * @property string $jam_pengambilan
 *
 * @property \backend\models\IzinSiup[] $izinSiups
 * @property \backend\models\Bidang $bidang
 * @property \backend\models\Registrasi $parent
 * @property \backend\models\Registrasi[] $registrasis
 * @property \backend\models\User $user
 * @property \backend\models\Lokasi $lokasi
 * @property \backend\models\RegistrasiProses[] $registrasiProses
 */
class Registrasi extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'registrasi';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'bidang_id' => Yii::t('app', 'Bidang ID'),
            'no_identitas' => Yii::t('app', 'No Identitas'),
            'urutan' => Yii::t('app', 'Urutan'),
            'tanggal_permohonan' => Yii::t('app', 'Tanggal Permohonan'),
            'no_izin' => Yii::t('app', 'No Izin'),
            'berkas_noizin' => Yii::t('app', 'Berkas Noizin'),
            'tanggal_izin' => Yii::t('app', 'Tanggal Izin'),
            'tanggal_expired' => Yii::t('app', 'Tanggal Expired'),
            'status' => Yii::t('app', 'Status'),
            'aktif' => Yii::t('app', 'Aktif'),
            'registrasi_urutan' => Yii::t('app', 'Registrasi Urutan'),
            'jumlah_tahap' => Yii::t('app', 'Jumlah Tahap'),
            'nomor_sp_rt_rw' => Yii::t('app', 'Nomor Sp Rt Rw'),
            'tanggal_sp_rt_rw' => Yii::t('app', 'Tanggal Sp Rt Rw'),
            'peruntukan' => Yii::t('app', 'Peruntukan'),
            'nama_perusahaan' => Yii::t('app', 'Nama Perusahaan'),
            'tanggal_cek_lapangan' => Yii::t('app', 'Tanggal Cek Lapangan'),
            'status_daftar' => Yii::t('app', 'Status Daftar'),
            'petugas_daftar' => Yii::t('app', 'Petugas Daftar'),
            'lokasi_id' => Yii::t('app', 'Lokasi ID'),
            'keterangan' => Yii::t('app', 'Keterangan'),
            'qr_code' => Yii::t('app', 'Qr Code'),
            'tanggal_pertemuan' => Yii::t('app', 'Tanggal Pertemuan'),
            'tanggal_pengambilan' => Yii::t('app', 'Tanggal Pengambilan'),
            'jam_pengambilan' => Yii::t('app', 'Jam Pengambilan'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIzinSiups()
    {
        return $this->hasMany(\backend\models\IzinSiup::className(), ['registrasi_id' => 'id']);
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
    public function getParent()
    {
        return $this->hasOne(\backend\models\Registrasi::className(), ['id' => 'parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegistrasis()
    {
        return $this->hasMany(\backend\models\Registrasi::className(), ['parent_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(\backend\models\User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLokasi()
    {
        return $this->hasOne(\backend\models\Lokasi::className(), ['id' => 'lokasi_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegistrasiProses()
    {
        return $this->hasMany(\backend\models\RegistrasiProses::className(), ['registrasi_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \backend\models\RegistrasiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\RegistrasiQuery(get_called_class());
    }
}
