<?php

namespace backend\models\base;

use Yii;

/**
 * This is the base model class for table "izin_siup".
 *
 * @property integer $id
 * @property integer $perizinan_id
 * @property integer $izin_id
 * @property integer $user_id
 * @property string $ktp
 * @property string $nama
 * @property string $alamat
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $telepon
 * @property string $fax
 * @property string $passport
 * @property string $kewarganegaraan
 * @property string $jabatan_perusahaan
 * @property string $npwp_perusahaan
 * @property string $nama_perusahaan
 * @property string $alamat_perusahaan
 * @property string $telpon_perusahaan
 * @property string $fax_perusahaan
 * @property integer $kelurahan_id
 * @property string $status_perusahaan
 * @property string $kode_pos
 * @property string $bentuk_perusahaan
 * @property string $akta_pendirian_no
 * @property string $akta_pendirian_tanggal
 * @property string $akta_pengesahan_no
 * @property string $akta_pengesahan_tanggal
 * @property string $no_sk
 * @property string $no_daftar
 * @property string $tanggal_pengesahan
 * @property double $modal
 * @property double $nilai_saham_pma
 * @property double $saham_nasional
 * @property double $saham_asing
 * @property string $barang_jasa_dagangan
 * @property string $tanggal_neraca
 * @property double $aktiva_lancar_kas
 * @property double $aktiva_lancar_bank
 * @property double $aktiva_lancar_piutang
 * @property double $aktiva_lancar_barang
 * @property double $aktiva_lancar_pekerjaan
 * @property double $aktiva_tetap_peralatan
 * @property double $aktiva_tetap_investasi
 * @property double $aktiva_lainnya
 * @property double $pasiva_hutang_dagang
 * @property double $pasiva_hutang_pajak
 * @property double $pasiva_hutang_lainnya
 * @property double $hutang_jangka_panjang
 * @property double $kekayaan_bersih
 *
 * @property \backend\models\Izin $izin
 * @property \backend\models\Perizinan $perizinan
 * @property \backend\models\User $user
 * @property \backend\models\IzinSiupAkta[] $izinSiupAktas
 * @property \backend\models\IzinSiupKbli[] $izinSiupKblis
 */
class IzinSiup extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'izin_siup';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'perizinan_id' => Yii::t('app', 'Perizinan ID'),
            'izin_id' => Yii::t('app', 'Izin ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'ktp' => Yii::t('app', 'Ktp'),
            'nama' => Yii::t('app', 'Nama'),
            'alamat' => Yii::t('app', 'Alamat'),
            'tempat_lahir' => Yii::t('app', 'Tempat Lahir'),
            'tanggal_lahir' => Yii::t('app', 'Tanggal Lahir'),
            'telepon' => Yii::t('app', 'Telepon'),
            'fax' => Yii::t('app', 'Fax'),
            'passport' => Yii::t('app', 'Passport'),
            'kewarganegaraan' => Yii::t('app', 'Kewarganegaraan'),
            'jabatan_perusahaan' => Yii::t('app', 'Jabatan Perusahaan'),
            'npwp_perusahaan' => Yii::t('app', 'Npwp Perusahaan'),
            'nama_perusahaan' => Yii::t('app', 'Nama Perusahaan'),
            'alamat_perusahaan' => Yii::t('app', 'Alamat Perusahaan'),
            'telpon_perusahaan' => Yii::t('app', 'Telpon Perusahaan'),
            'fax_perusahaan' => Yii::t('app', 'Fax Perusahaan'),
            'kelurahan_id' => Yii::t('app', 'Kelurahan ID'),
            'status_perusahaan' => Yii::t('app', 'Status Perusahaan'),
            'kode_pos' => Yii::t('app', 'Kode Pos'),
            'bentuk_perusahaan' => Yii::t('app', 'Bentuk Perusahaan'),
            'akta_pendirian_no' => Yii::t('app', 'Akta Pendirian No'),
            'akta_pendirian_tanggal' => Yii::t('app', 'Akta Pendirian Tanggal'),
            'akta_pengesahan_no' => Yii::t('app', 'Akta Pengesahan No'),
            'akta_pengesahan_tanggal' => Yii::t('app', 'Akta Pengesahan Tanggal'),
            'no_sk' => Yii::t('app', 'No Sk'),
            'no_daftar' => Yii::t('app', 'No Daftar'),
            'tanggal_pengesahan' => Yii::t('app', 'Tanggal Pengesahan'),
            'modal' => Yii::t('app', 'Modal'),
            'nilai_saham_pma' => Yii::t('app', 'Nilai Saham Pma'),
            'saham_nasional' => Yii::t('app', 'Saham Nasional'),
            'saham_asing' => Yii::t('app', 'Saham Asing'),
            'barang_jasa_dagangan' => Yii::t('app', 'Barang Jasa Dagangan'),
            'tanggal_neraca' => Yii::t('app', 'Tanggal Neraca'),
            'aktiva_lancar_kas' => Yii::t('app', 'Aktiva Lancar Kas'),
            'aktiva_lancar_bank' => Yii::t('app', 'Aktiva Lancar Bank'),
            'aktiva_lancar_piutang' => Yii::t('app', 'Aktiva Lancar Piutang'),
            'aktiva_lancar_barang' => Yii::t('app', 'Aktiva Lancar Barang'),
            'aktiva_lancar_pekerjaan' => Yii::t('app', 'Aktiva Lancar Pekerjaan'),
            'aktiva_tetap_peralatan' => Yii::t('app', 'Aktiva Tetap Peralatan'),
            'aktiva_tetap_investasi' => Yii::t('app', 'Aktiva Tetap Investasi'),
            'aktiva_lainnya' => Yii::t('app', 'Aktiva Lainnya'),
            'pasiva_hutang_dagang' => Yii::t('app', 'Pasiva Hutang Dagang'),
            'pasiva_hutang_pajak' => Yii::t('app', 'Pasiva Hutang Pajak'),
            'pasiva_hutang_lainnya' => Yii::t('app', 'Pasiva Hutang Lainnya'),
            'hutang_jangka_panjang' => Yii::t('app', 'Hutang Jangka Panjang'),
            'kekayaan_bersih' => Yii::t('app', 'Kekayaan Bersih'),
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
     * @return \yii\db\ActiveQuery
     */
    public function getPerizinan()
    {
        return $this->hasOne(\backend\models\Perizinan::className(), ['id' => 'perizinan_id']);
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
    public function getIzinSiupAktas()
    {
        return $this->hasMany(\backend\models\IzinSiupAkta::className(), ['izin_siup_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIzinSiupKblis()
    {
        return $this->hasMany(\backend\models\IzinSiupKbli::className(), ['izin_siup_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \backend\models\IzinSiupQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\IzinSiupQuery(get_called_class());
    }
}
