<?php

namespace backend\models;

use Yii;
use \backend\models\base\IzinSiup as BaseIzinSiup;
use backend\models\Perizinan;

/**
 * This is the model class for table "izin_siup".
 */
class IzinSiup extends BaseIzinSiup
{
    
    public $kabupaten_kota;
    
    public $kecamatan;
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'ktp', 'nama', 'alamat', 'tempat_lahir', 'tanggal_lahir', 'kewarganegaraan', 'jabatan_perusahaan', 'npwp_perusahaan', 'nama_perusahaan', 'alamat_perusahaan', 'kelurahan_id', 'status_perusahaan', 'kode_pos', 'bentuk_perusahaan', 'akta_pendirian_no', 'akta_pendirian_tanggal', 'akta_pengesahan_no', 'akta_pengesahan_tanggal', 'no_sk', 'no_daftar', 'tanggal_pengesahan', 'modal', 'barang_jasa_dagangan', 'tanggal_neraca', 'aktiva_lancar_kas', 'aktiva_lancar_bank', 'aktiva_lancar_piutang', 'aktiva_lancar_barang', 'aktiva_lancar_pekerjaan', 'aktiva_tetap_peralatan', 'aktiva_tetap_investasi', 'aktiva_lainnya', 'pasiva_hutang_dagang', 'pasiva_hutang_pajak', 'pasiva_hutang_lainnya', 'hutang_jangka_panjang', 'kekayaan_bersih'], 'required'],
            [['perizinan_id', 'izin_id', 'user_id', 'kelurahan_id'], 'integer'],
            [['alamat', 'alamat_perusahaan', 'status_perusahaan', 'bentuk_perusahaan'], 'string'],
            [['tanggal_lahir', 'akta_pendirian_tanggal', 'akta_pengesahan_tanggal', 'tanggal_pengesahan', 'tanggal_neraca'], 'safe'],
            [['modal', 'nilai_saham_pma', 'saham_nasional', 'saham_asing', 'aktiva_lancar_kas', 'aktiva_lancar_bank', 'aktiva_lancar_piutang', 'aktiva_lancar_barang', 'aktiva_lancar_pekerjaan', 'aktiva_tetap_peralatan', 'aktiva_tetap_investasi', 'aktiva_lainnya', 'pasiva_hutang_dagang', 'pasiva_hutang_pajak', 'pasiva_hutang_lainnya', 'hutang_jangka_panjang', 'kekayaan_bersih'], 'number'],
            [['ktp', 'passport'], 'string', 'max' => 16],
            [['nama', 'nama_perusahaan', 'barang_jasa_dagangan'], 'string', 'max' => 100],
            [['tempat_lahir', 'kewarganegaraan', 'jabatan_perusahaan', 'akta_pendirian_no', 'akta_pengesahan_no', 'no_sk', 'no_daftar'], 'string', 'max' => 50],
            [['telepon', 'fax', 'telpon_perusahaan', 'fax_perusahaan'], 'string', 'max' => 12],
            [['npwp_perusahaan'], 'string', 'max' => 20],
            [['kode_pos'], 'string', 'max' => 5]
        ];
    }
    
    public function beforeSave($insert) {
        if (parent::beforeSave($insert)) {
            $pid = Perizinan::addNew($this->izin_id);
            $this->perizinan_id = $pid;
            return true;
        } else {
            return false;
        }
    }
	
}
