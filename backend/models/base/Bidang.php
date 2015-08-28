<?php

namespace backend\models\base;

use Yii;

/**
 * This is the base model class for table "bidang".
 *
 * @property integer $id
 * @property string $nama
 *
 * @property \backend\models\Izin[] $izins
 */
class Bidang extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bidang';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nama' => Yii::t('app', 'Nama'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIzins()
    {
        return $this->hasMany(\backend\models\Izin::className(), ['bidang_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \backend\models\BidangQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\BidangQuery(get_called_class());
    }
}
