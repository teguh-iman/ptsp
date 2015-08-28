<?php

namespace backend\models\base;

use Yii;

/**
 * This is the base model class for table "izin_siup_kbli".
 *
 * @property integer $id
 * @property integer $izin_siup_id
 * @property integer $kbli_id
 *
 * @property \backend\models\IzinSiup $izinSiup
 * @property \backend\models\Kbli $kbli
 */
class IzinSiupKbli extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'izin_siup_kbli';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'izin_siup_id' => Yii::t('app', 'Izin Siup ID'),
            'kbli_id' => Yii::t('app', 'Kbli ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIzinSiup()
    {
        return $this->hasOne(\backend\models\IzinSiup::className(), ['id' => 'izin_siup_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKbli()
    {
        return $this->hasOne(\backend\models\Kbli::className(), ['id' => 'kbli_id']);
    }

    /**
     * @inheritdoc
     * @return \backend\models\IzinSiupKbliQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\IzinSiupKbliQuery(get_called_class());
    }
}
