<?php

namespace backend\models;

use Yii;
use \backend\models\base\Kbli as BaseKbli;

/**
 * This is the model class for table "kbli".
 */
class Kbli extends BaseKbli
{
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode', 'nama'], 'required'],
            [['kode'], 'string', 'max' => 4],
            [['nama'], 'string', 'max' => 255]
        ];
    }
	
}
