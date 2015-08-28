<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[\backend\models\Pelaksana]].
 *
 * @see \backend\models\Pelaksana
 */
class PelaksanaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \backend\models\Pelaksana[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \backend\models\Pelaksana|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}