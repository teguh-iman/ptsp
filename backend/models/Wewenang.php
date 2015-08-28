<?php

namespace backend\models;

use Yii;
use \backend\models\base\Wewenang as BaseWewenang;

/**
 * This is the model class for table "wewenang".
 */
class Wewenang extends BaseWewenang
{
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'kode'], 'required'],
            [['aktif'], 'string'],
            [['parent_id'], 'integer'],
            [['nama'], 'string', 'max' => 80],
            [['kode'], 'string', 'max' => 5]
        ];
    }
	
}
