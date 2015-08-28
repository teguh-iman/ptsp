<?php

namespace backend\models;

use Yii;
use \backend\models\base\Izin as BaseIzin;

/**
 * This is the model class for table "izin".
 */
class Izin extends BaseIzin
{
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenis', 'bidang_id', 'nama', 'kode', 'fno_surat', 'wewenang_id', 'durasi', 'latar_belakang', 'persyaratan', 'mekanisme', 'pengaduan', 'dasar_hukum', 'definisi', 'biaya', 'type'], 'required'],
            [['jenis', 'aktif', 'cek_lapangan', 'cek_sprtrw', 'cek_obyek', 'cek_perusahaan', 'durasi_satuan', 'latar_belakang', 'persyaratan', 'mekanisme', 'pengaduan', 'dasar_hukum', 'definisi', 'brosur', 'type'], 'string'],
            [['bidang_id', 'wewenang_id', 'durasi', 'arsip_id'], 'integer'],
            [['biaya'], 'number'],
            [['nama', 'kode'], 'string', 'max' => 255],
            [['fno_surat'], 'string', 'max' => 200],
            [['action'], 'string', 'max' => 100]
        ];
    }
	
}
