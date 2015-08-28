<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[RegistrasiProses]].
 *
 * @see RegistrasiProses
 */
class RegistrasiProsesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return RegistrasiProses[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return RegistrasiProses|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}