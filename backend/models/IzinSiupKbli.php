<?php

namespace backend\models;

use Yii;
use \backend\models\base\IzinSiupKbli as BaseIzinSiupKbli;

/**
 * This is the model class for table "izin_siup_kbli".
 */
class IzinSiupKbli extends BaseIzinSiupKbli
{
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['izin_siup_id', 'kbli_id'], 'integer'],
            [['izin_siup_id', 'kbli_id'], 'unique', 'targetAttribute' => ['izin_siup_id', 'kbli_id'], 'message' => 'The combination of Izin Siup ID and Kbli ID has already been taken.']
        ];
    }
	
}
