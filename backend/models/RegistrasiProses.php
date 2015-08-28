<?php

namespace backend\models;

use Yii;
use \backend\models\base\RegistrasiProses as BaseRegistrasiProses;

/**
 * This is the model class for table "registrasi_proses".
 */
class RegistrasiProses extends BaseRegistrasiProses
{
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['registrasi_id', 'dokumen_pendukung_id', 'pelaksana_id', 'user_id', 'dokumen'], 'required'],
            [['registrasi_id', 'dokumen_pendukung_id', 'pelaksana_id', 'user_id', 'aktif', 'urutan'], 'integer'],
            [['modul', 'status', 'dokumen', 'approval', 'pelaksana', 'keterangan', 'type'], 'string'],
            [['tanggal_proses'], 'safe'],
            [['nama_berkas'], 'string', 'max' => 100],
            [['berkas'], 'string', 'max' => 200]
        ];
    }
	
}
