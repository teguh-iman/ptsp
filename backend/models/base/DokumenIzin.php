<?php

namespace backend\models\base;

use Yii;

/**
 * This is the base model class for table "dokumen_izin".
 *
 * @property integer $id
 * @property integer $izin_id
 * @property string $judul
 * @property string $isi
 * @property string $file
 * @property string $aktif
 *
 * @property \backend\models\Izin $izin
 * @property \backend\models\MekanismePelayanan[] $mekanismePelayanans
 */
class DokumenIzin extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dokumen_izin';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'izin_id' => Yii::t('app', 'Izin ID'),
            'judul' => Yii::t('app', 'Judul'),
            'isi' => Yii::t('app', 'Isi'),
            'file' => Yii::t('app', 'File'),
            'aktif' => Yii::t('app', 'Aktif'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIzin()
    {
        return $this->hasOne(\backend\models\Izin::className(), ['id' => 'izin_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMekanismePelayanans()
    {
        return $this->hasMany(\backend\models\MekanismePelayanan::className(), ['dok_output' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \backend\models\DokumenIzinQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\DokumenIzinQuery(get_called_class());
    }
}
