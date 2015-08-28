<?php

namespace backend\models;

use Yii;
use \backend\models\base\JenisIzin as BaseJenisIzin;

/**
 * This is the model class for table "jenis_izin".
 */
class JenisIzin extends BaseJenisIzin
{
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bidang_id', 'nama', 'action'], 'required'],
            [['bidang_id'], 'integer'],
            [['nama', 'action'], 'string', 'max' => 100]
        ];
    }
	
}
