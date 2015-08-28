<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[\backend\models\IzinSiup]].
 *
 * @see \backend\models\IzinSiup
 */
class IzinSiupQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \backend\models\IzinSiup[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \backend\models\IzinSiup|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}