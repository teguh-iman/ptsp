<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Registrasi]].
 *
 * @see Registrasi
 */
class RegistrasiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Registrasi[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Registrasi|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}