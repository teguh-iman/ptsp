<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[\backend\models\Migration]].
 *
 * @see \backend\models\Migration
 */
class MigrationQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \backend\models\Migration[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \backend\models\Migration|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}