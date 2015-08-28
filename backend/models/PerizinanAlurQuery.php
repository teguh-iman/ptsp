<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[PerizinanAlur]].
 *
 * @see PerizinanAlur
 */
class PerizinanAlurQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return PerizinanAlur[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return PerizinanAlur|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}