<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[\backend\models\Menu]].
 *
 * @see \backend\models\Menu
 */
class MenuQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \backend\models\Menu[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \backend\models\Menu|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}