<?php

namespace backend\models\base;

use Yii;

/**
 * This is the base model class for table "menu".
 *
 * @property integer $id
 * @property string $name
 * @property integer $parent
 * @property string $route
 * @property integer $order
 * @property string $data
 */
class Menu extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'parent' => Yii::t('app', 'Parent'),
            'route' => Yii::t('app', 'Route'),
            'order' => Yii::t('app', 'Order'),
            'data' => Yii::t('app', 'Data'),
        ];
    }

    /**
     * @inheritdoc
     * @return \backend\models\MenuQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\MenuQuery(get_called_class());
    }
}
