<?php

namespace backend\models\base;

use Yii;

/**
 * This is the base model class for table "wewenang".
 *
 * @property integer $id
 * @property string $nama
 * @property string $aktif
 * @property integer $parent_id
 * @property string $kode
 *
 * @property \backend\models\Wewenang $parent
 * @property \backend\models\Wewenang[] $wewenangs
 */
class Wewenang extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wewenang';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nama' => Yii::t('app', 'Nama'),
            'aktif' => Yii::t('app', 'Aktif'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'kode' => Yii::t('app', 'Kode'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(\backend\models\Wewenang::className(), ['id' => 'parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWewenangs()
    {
        return $this->hasMany(\backend\models\Wewenang::className(), ['parent_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \backend\models\WewenangQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\WewenangQuery(get_called_class());
    }
}
