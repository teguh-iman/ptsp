<?php

namespace backend\models;

use Yii;
use \backend\models\base\Menu as BaseMenu;

/**
 * This is the model class for table "menu".
 */
class Menu extends BaseMenu
{
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['parent', 'order'], 'integer'],
            [['route', 'data'], 'string'],
            [['name'], 'string', 'max' => 128]
        ];
    }
	
}
