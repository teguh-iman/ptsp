<?php

namespace backend\models;

use Yii;
use \backend\models\base\DokumenIzin as BaseDokumenIzin;

/**
 * This is the model class for table "dokumen_izin".
 */
class DokumenIzin extends BaseDokumenIzin
{
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['izin_id', 'judul', 'isi', 'file'], 'required'],
            [['izin_id'], 'integer'],
            [['isi', 'aktif'], 'string'],
            [['judul'], 'string', 'max' => 200],
            [['file'], 'string', 'max' => 100]
        ];
    }
	
}
