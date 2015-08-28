<?php

namespace backend\models;

use Yii;
use \backend\models\base\Arsip as BaseArsip;

/**
 * This is the model class for table "arsip".
 */
class Arsip extends BaseArsip
{
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'kode'], 'required'],
            [['aktif'], 'string'],
            [['nama', 'kode'], 'string', 'max' => 255]
        ];
    }
	
}
