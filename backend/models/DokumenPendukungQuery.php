<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[DokumenPendukung]].
 *
 * @see DokumenPendukung
 */
class DokumenPendukungQuery extends \yii\db\ActiveQuery
{
    public function persyaratan()
    {
        $this->andWhere('kategori="Persyaratan Izin"');
        return $this;
    }

    /**
     * @inheritdoc
     * @return DokumenPendukung[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return DokumenPendukung|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}