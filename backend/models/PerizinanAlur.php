<?php

namespace backend\models;

use Yii;
use \backend\models\base\PerizinanAlur as BasePerizinanAlur;

/**
 * This is the model class for table "perizinan_alur".
 */
class PerizinanAlur extends BasePerizinanAlur
{
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['perizinan_id', 'dokumen_izin_id', 'dokumen_pendukung_id', 'pelaksana_id', 'isi_dok_pendukung', 'tanggal_proses', 'pelaksana', 'dok_input', 'dok_proses', 'dok_output', 'nama_modul', 'nama_berkas', 'berkas', 'berkas_seo', 'tanggal', 'valid', 'keterangan', 'mulai', 'selesai', 'jarak', 'duration', 'registrasi_action', 'jarak_sebelum', 'jarak_sekarang'], 'required'],
            [['perizinan_id', 'dokumen_izin_id', 'dokumen_pendukung_id', 'pelaksana_id'], 'integer'],
            [['isi_dok_pendukung', 'dok_input', 'dok_proses', 'dok_output', 'status', 'valid', 'keterangan', 'mekanisme_cek', 'aktif', 'type'], 'string'],
            [['tanggal_proses', 'tanggal', 'mulai', 'selesai'], 'safe'],
            [['pelaksana', 'nama_modul', 'nama_berkas', 'berkas_seo'], 'string', 'max' => 100],
            [['berkas'], 'string', 'max' => 200],
            [['jarak'], 'string', 'max' => 125],
            [['duration', 'registrasi_action'], 'string', 'max' => 15],
            [['jarak_sebelum', 'jarak_sekarang'], 'string', 'max' => 150]
        ];
    }
	
}
