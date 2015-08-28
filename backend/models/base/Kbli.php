<?php

namespace backend\models\base;

use Yii;

/**
 * This is the base model class for table "kbli".
 *
 * @property integer $id
 * @property string $kode
 * @property string $nama
 *
 * @property \backend\models\IzinSiupKbli[] $izinSiupKblis
 */
class Kbli extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kbli';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'kode' => Yii::t('app', 'Kode'),
            'nama' => Yii::t('app', 'Nama'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIzinSiupKblis()
    {
        return $this->hasMany(\backend\models\IzinSiupKbli::className(), ['kbli_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \backend\models\KbliQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\KbliQuery(get_called_class());
    }
}
