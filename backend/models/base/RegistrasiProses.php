<?php

namespace backend\models\base;

use Yii;

/**
 * This is the base model class for table "registrasi_proses".
 *
 * @property integer $id
 * @property integer $registrasi_id
 * @property integer $dokumen_pendukung_id
 * @property integer $pelaksana_id
 * @property integer $user_id
 * @property string $modul
 * @property integer $aktif
 * @property string $status
 * @property string $dokumen
 * @property string $tanggal_proses
 * @property string $approval
 * @property string $pelaksana
 * @property string $nama_berkas
 * @property string $berkas
 * @property string $keterangan
 * @property string $type
 *
 * @property \backend\models\DokumenPendukung $dokumenPendukung
 * @property \backend\models\Pelaksana $pelaksana0
 * @property \backend\models\Registrasi $registrasi
 * @property \backend\models\User $user
 */
class RegistrasiProses extends \yii\db\ActiveRecord
{

    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'registrasi_proses';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'registrasi_id' => Yii::t('app', 'Registrasi ID'),
            'dokumen_pendukung_id' => Yii::t('app', 'Dokumen Pendukung ID'),
            'pelaksana_id' => Yii::t('app', 'Pelaksana ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'urutan' => Yii::t('app', 'Urutan'),
            'modul' => Yii::t('app', 'Modul'),
            'aktif' => Yii::t('app', 'Aktif'),
            'status' => Yii::t('app', 'Status'),
            'dokumen' => Yii::t('app', 'Dokumen'),
            'tanggal_proses' => Yii::t('app', 'Tanggal Proses'),
            'approval' => Yii::t('app', 'Approval'),
            'pelaksana' => Yii::t('app', 'Pelaksana'),
            'nama_berkas' => Yii::t('app', 'Nama Berkas'),
            'berkas' => Yii::t('app', 'Berkas'),
            'keterangan' => Yii::t('app', 'Keterangan'),
            'type' => Yii::t('app', 'Type'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDokumenPendukung()
    {
        return $this->hasOne(\backend\models\DokumenPendukung::className(), ['id' => 'dokumen_pendukung_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPelaksana0()
    {
        return $this->hasOne(\backend\models\Pelaksana::className(), ['id' => 'pelaksana_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegistrasi()
    {
        return $this->hasOne(\backend\models\Registrasi::className(), ['id' => 'registrasi_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(\backend\models\User::className(), ['id' => 'user_id']);
    }

    /**
     * @inheritdoc
     * @return \backend\models\RegistrasiProsesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\RegistrasiProsesQuery(get_called_class());
    }
}
