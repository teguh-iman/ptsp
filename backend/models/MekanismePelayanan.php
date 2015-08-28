<?php

namespace backend\models;

use Yii;
use \backend\models\base\MekanismePelayanan as BaseMekanismePelayanan;

/**
 * This is the model class for table "mekanisme_pelayanan".
 */
class MekanismePelayanan extends BaseMekanismePelayanan
{
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['izin_id', 'isi', 'berkas', 'durasi', 'dur_sat', 'dur_sat1', 'dur_sat2', 'dur_sat3', 'urutan', 'dokpendukung_tipe', 'petugas_cek'], 'required'],
            [['izin_id', 'pelaksana_id', 'dok_input', 'dok_proses', 'dok_output', 'durasi', 'dur_sat', 'dur_sat1', 'dur_sat2', 'dur_sat3', 'urutan'], 'integer'],
            [['isi', 'durasi_satuan', 'aktif', 'petugas_cek'], 'string'],
            [['berkas'], 'string', 'max' => 100],
            [['dokpendukung_tipe'], 'string', 'max' => 10]
        ];
    }
	
}
