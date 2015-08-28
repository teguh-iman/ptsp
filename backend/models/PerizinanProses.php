<?php

namespace backend\models;

use Yii;
use \backend\models\base\PerizinanProses as BasePerizinanProses;

/**
 * This is the model class for table "perizinan_proses".
 */
class PerizinanProses extends BasePerizinanProses {

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['perizinan_id', 'mekanisme_pelayanan_id', 'pelaksana_id', 'urutan', 'active', 'tanggal_proses', 'isi_dokumen', 'keterangan', 'tanggal'], 'required'],
            [['perizinan_id', 'mekanisme_pelayanan_id', 'pelaksana_id', 'urutan', 'active'], 'integer'],
            [['tanggal_proses', 'tanggal', 'mulai', 'selesai'], 'safe'],
            [['isi_dokumen', 'dok_input', 'dok_proses', 'dok_output', 'status', 'keterangan', 'valid', 'mekanisme_cek', 'aktif', 'type'], 'string'],
            [['pelaksana', 'nama_berkas', 'berkas_seo'], 'string', 'max' => 100],
            [['berkas'], 'string', 'max' => 200],
            [['jarak'], 'string', 'max' => 125],
            [['jarak_sebelum', 'jarak_sekarang'], 'string', 'max' => 150]
        ];
    }

    public function beforeSave($insert) {
        parent::beforeSave($insert);
        if ($insert === false) {
//            $this->active = 0;
            $this->tanggal = new \yii\db\Expression('NOW()');
            $this->tanggal_proses = new \yii\db\Expression('NOW()');
//            if ($this->status == 'Lanjut' || $this->status == 'Proses') {
//                $next = PerizinanProses::findOne($this->id + 1);
//                $next->active = 1;
//                $next->save(false);
//            } else if ($this->status == 'Revisi' || $this->status == 'Tolak') {
//                $prev = PerizinanProses::findOne($this->id - 1);
//                $prev->active = 1;
//                $prev->save(false);
//            }
//            \backend\models\Perizinan::updateAll(['status' => $this->status], ['id' => $this->perizinan_id]);
            return true;
        } else {
            return false;
        }
    }

}
