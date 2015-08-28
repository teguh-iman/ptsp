<?php

namespace backend\models;

use Yii;
use \backend\models\base\Bidang as BaseBidang;

/**
 * This is the model class for table "bidang".
 */
class Bidang extends BaseBidang
{
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 100]
        ];
    }
	
}
