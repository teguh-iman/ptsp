<?php

namespace backend\models;

use Yii;
use \backend\models\base\IzinSiupAkta as BaseIzinSiupAkta;

/**
 * This is the model class for table "izin_siup_akta".
 */
class IzinSiupAkta extends BaseIzinSiupAkta
{
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['izin_siup_id'], 'integer'],
            [['tanggal_akta', 'tanggal_pengesahan'], 'safe'],
            [['nomor_akta', 'nomor_pengesahan'], 'string', 'max' => 50]
        ];
    }
	
}
