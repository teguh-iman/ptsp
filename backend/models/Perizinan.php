<?php

namespace backend\models;

use Yii;
use backend\models\base\Perizinan as BasePerizinan;

/**
 * This is the model class for table "perizinan".
 */
class Perizinan extends BasePerizinan
{
    public $current;
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'pemohon_id', 'id_groupizin', 'izin_id', 'no_urut', 'petugas_daftar_id', 'lokasi_id', 'jumlah_tahap'], 'integer'],
            [['pemohon_id', 'izin_id', 'no_urut', 'tanggal_mohon'], 'required'],
            [['tanggal_mohon', 'tanggal_izin', 'tanggal_expired', 'tanggal_sp_rt_rw', 'tanggal_cek_lapangan', 'tanggal_pertemuan', 'pengambilan_tanggal', 'pengambilan_jam'], 'safe'],
            [['status', 'aktif', 'registrasi_urutan', 'status_daftar', 'keterangan'], 'string'],
            [['no_izin', 'berkas_noizin', 'petugas_cek'], 'string', 'max' => 100],
            [['nomor_sp_rt_rw'], 'string', 'max' => 30],
            [['peruntukan'], 'string', 'max' => 150],
            [['nama_perusahaan'], 'string', 'max' => 255],
            [['qr_code'], 'string', 'max' => 50]
        ];
    }
    
     public function addNew($pid) {
        $model = new \backend\models\base\Perizinan;
        $model->pemohon_id = Yii::$app->user->id;
        $model->izin_id = $pid;
//        $model->no_identitas = '123';
        $model->no_urut = 1;
        $model->tanggal_mohon = new \yii\db\Expression('NOW()');
        $model->status = 'Daftar';
        
        $flows = self::getFlows($pid);
        
        $model->jumlah_tahap = count($flows);
        $model->save();
        
        self::addProcess($model->id, $flows);
        return $model->id;
    }
    
    public function getFlows($pid) {
        $connection = \Yii::$app->db;
        $query = $connection->createCommand("select 
	m.id, 
	m.urutan, 
	m.isi as proses, 
	d1.isi as isi_dok_input,  
	d2.isi as isi_dok_proses,  
	d3.isi as isi_dok_output,  
	m.pelaksana_id, 
	s.nama as pelaksana 
        from mekanisme_pelayanan m
        left join dokumen_izin d1 on d1.id = m.dok_input
        left join dokumen_izin d2 on d2.id = m.dok_proses
        left join dokumen_izin d3 on d3.id = m.dok_output
        left join pelaksana s on s.id = m.pelaksana_id
        where m.izin_id = :pid
        order by urutan");
        $query->bindValue(':pid', $pid);
        return $query->queryAll();
    }

    public function addProcess($id, $flows) {
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
        foreach ($flows as $value) {
            $proses = new \backend\models\base\PerizinanProses;
            $proses->perizinan_id = $id;
            $proses->mekanisme_pelayanan_id = $value['id'];
            $proses->pelaksana_id = $value['pelaksana_id'];
            $proses->urutan = $value['urutan'];
            if ($first) {
                $proses->active = $first;
                $proses->status = 'Daftar';
            }
            $first = 0;
            $proses->tanggal_proses = new \yii\db\Expression('NOW()');
            $proses->isi_dokumen = $value['isi_dok_input'];
            $proses->dok_input = $value['isi_dok_input'];
            $proses->dok_proses = $value['isi_dok_proses'];
            $proses->dok_output = $value['isi_dok_output'];
            $proses->save();
        }
//                $transaction->commit();
//            } catch (\Exception $e) {
//                $transaction->rollBack();
//                throw $e;
//            }
    }
    
    public function afterFind() {
        $this->current = \backend\models\PerizinanProses::findOne(['active'=>1, 'perizinan_id'=> $this->id])->urutan;
    }
	
}
