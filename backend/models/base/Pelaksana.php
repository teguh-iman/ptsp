<?php

namespace backend\models\base;

use Yii;

/**
 * This is the base model class for table "pelaksana".
 *
 * @property integer $id
 * @property string $nama
 * @property string $warna
 * @property string $aktif
 *
 * @property \backend\models\MekanismePelayanan[] $mekanismePelayanans
 * @property \backend\models\PerizinanProses[] $perizinanProses
 * @property \backend\models\User[] $users
 */
class Pelaksana extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pelaksana';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nama' => Yii::t('app', 'Nama'),
            'warna' => Yii::t('app', 'Warna'),
            'aktif' => Yii::t('app', 'Aktif'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMekanismePelayanans()
    {
        return $this->hasMany(\backend\models\MekanismePelayanan::className(), ['pelaksana_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerizinanProses()
    {
        return $this->hasMany(\backend\models\PerizinanProses::className(), ['pelaksana_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(\backend\models\User::className(), ['pelaksana_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \backend\models\PelaksanaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\PelaksanaQuery(get_called_class());
    }
}
