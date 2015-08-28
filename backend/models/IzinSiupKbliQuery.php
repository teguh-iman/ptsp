<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[\backend\models\IzinSiupKbli]].
 *
 * @see \backend\models\IzinSiupKbli
 */
class IzinSiupKbliQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \backend\models\IzinSiupKbli[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \backend\models\IzinSiupKbli|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}