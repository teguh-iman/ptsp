<?php

namespace backend\models\base;

use Yii;

/**
 * This is the base model class for table "arsip".
 *
 * @property integer $id
 * @property string $nama
 * @property string $kode
 * @property string $aktif
 */
class Arsip extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'arsip';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nama' => Yii::t('app', 'Nama'),
            'kode' => Yii::t('app', 'Kode'),
            'aktif' => Yii::t('app', 'Aktif'),
        ];
    }

    /**
     * @inheritdoc
     * @return \backend\models\ArsipQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\ArsipQuery(get_called_class());
    }
}
