<?php

namespace backend\models;

use Yii;
use \backend\models\base\Registrasi as BaseRegistrasi;
use yii\db\Query;

/**
 * This is the model class for table "registrasi".
 */
class Registrasi extends BaseRegistrasi {

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['parent_id', 'bidang_id', 'urutan', 'lokasi_id', 'jumlah_tahap'], 'integer'],
            [['user_id', 'bidang_id', 'urutan'], 'required'],
            [['tanggal_permohonan', 'tanggal_izin', 'tanggal_expired', 'tanggal_sp_rt_rw', 'tanggal_cek_lapangan', 'tanggal_pertemuan', 'tanggal_pengambilan', 'jam_pengambilan'], 'safe'],
            [['status', 'aktif', 'registrasi_urutan', 'status_daftar', 'keterangan'], 'string'],
            [['no_identitas', 'nomor_sp_rt_rw', 'petugas_daftar'], 'string', 'max' => 30],
            [['no_izin', 'berkas_noizin'], 'string', 'max' => 100],
            [['peruntukan'], 'string', 'max' => 150],
            [['nama_perusahaan'], 'string', 'max' => 255],
            [['qr_code'], 'string', 'max' => 50]
        ];
    }

    public function addRegistrasi($bid) {
        $model = new \backend\models\base\Registrasi;
        $model->user_id = Yii::$app->user->id;
        $model->bidang_id = $bid;
        $model->no_identitas = '123';
        $model->urutan = 1;
        $model->tanggal_permohonan = new \yii\db\Expression('NOW()');
        $model->status = 'Daftar';
        
        $docs = self::getDocs($bid);
        
        $model->jumlah_tahap = count($docs);
        $model->save();
        
        self::addProcess($model->id, $docs);
        return $model->id;
    }
    
    public function getDocs($bid) {
        $connection = \Yii::$app->db;
        $query = $connection->createCommand("select p.id, p.urutan, p.isi as proses, i.judul, i.isi,  p.pelaksana_id, s.nama as pelaksana from dokumen_pendukung p
                        left join dokumen_izin i on i.id = p.dokumen_izin_id
                        left join pelaksana s on s.id = p.pelaksana_id
                        where p.bidang_id = :bidang_id and modul = 'Mekanisme Pelayanan'
                        order by urutan");
        $query->bindValue(':bidang_id', $bid);
        return $query->queryAll();
    }

    public function addProcess($id, $docs) {
//        $connection = \Yii::$app->db;
//        $query = $connection->createCommand("select p.id, p.urutan, p.isi as proses, i.judul, i.isi,  p.pelaksana_id, s.nama as pelaksana from dokumen_pendukung p
//                        left join dokumen_izin i on i.id = p.dokumen_izin_id
//                        left join pelaksana s on s.id = p.pelaksana_id
//                        where p.bidang_id = :bidang_id and modul = 'Mekanisme Pelayanan'
//                        order by urutan");
//        $query->bindValue(':bidang_id', $bid);
//        $docs = $query->queryAll();
//            $transaction = $connection->beginTransaction();
//            try {
        $first = 1;
        foreach ($docs as $value) {
            $proses = new \backend\models\base\RegistrasiProses;
            $proses->registrasi_id = $id;
            $proses->dokumen_pendukung_id = $value['id'];
            $proses->pelaksana_id = $value['pelaksana_id'];
            $proses->urutan = $value['urutan'];
            $proses->modul = 'Mekanisme Pelayanan';
            if ($first) {
                $proses->aktif = $first;
                $proses->status = 'Daftar';
            }
            $first = 0;
            $proses->tanggal_proses = new \yii\db\Expression('NOW()');
            $proses->dokumen = $value['isi'];
            $proses->save();
        }
//                $transaction->commit();
//            } catch (\Exception $e) {
//                $transaction->rollBack();
//                throw $e;
//            }
    }

}
