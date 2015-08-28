<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Registrasi;

/**
 * backend\models\RegistrasiSearch represents the model behind the search form about `backend\models\Registrasi`.
 */
 class RegistrasiSearch extends Registrasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'parent_id', 'user_id', 'bidang_id', 'urutan', 'lokasi_id'], 'integer'],
            [['no_identitas', 'tanggal_permohonan', 'no_izin', 'berkas_noizin', 'tanggal_izin', 'tanggal_expired', 'status', 'aktif', 'registrasi_urutan', 'nomor_sp_rt_rw', 'tanggal_sp_rt_rw', 'peruntukan', 'nama_perusahaan', 'tanggal_cek_lapangan', 'status_daftar', 'petugas_daftar', 'keterangan', 'qr_code', 'tanggal_pertemuan', 'tanggal_pengambilan', 'jam_pengambilan'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Registrasi::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'parent_id' => $this->parent_id,
            'user_id' => $this->user_id,
            'bidang_id' => $this->bidang_id,
            'urutan' => $this->urutan,
            'tanggal_permohonan' => $this->tanggal_permohonan,
            'tanggal_izin' => $this->tanggal_izin,
            'tanggal_expired' => $this->tanggal_expired,
            'tanggal_sp_rt_rw' => $this->tanggal_sp_rt_rw,
            'tanggal_cek_lapangan' => $this->tanggal_cek_lapangan,
            'lokasi_id' => $this->lokasi_id,
            'tanggal_pertemuan' => $this->tanggal_pertemuan,
            'tanggal_pengambilan' => $this->tanggal_pengambilan,
            'jam_pengambilan' => $this->jam_pengambilan,
        ]);

        $query->andFilterWhere(['like', 'no_identitas', $this->no_identitas])
            ->andFilterWhere(['like', 'no_izin', $this->no_izin])
            ->andFilterWhere(['like', 'berkas_noizin', $this->berkas_noizin])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'aktif', $this->aktif])
            ->andFilterWhere(['like', 'registrasi_urutan', $this->registrasi_urutan])
            ->andFilterWhere(['like', 'nomor_sp_rt_rw', $this->nomor_sp_rt_rw])
            ->andFilterWhere(['like', 'peruntukan', $this->peruntukan])
            ->andFilterWhere(['like', 'nama_perusahaan', $this->nama_perusahaan])
            ->andFilterWhere(['like', 'status_daftar', $this->status_daftar])
            ->andFilterWhere(['like', 'petugas_daftar', $this->petugas_daftar])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'qr_code', $this->qr_code]);

        return $dataProvider;
    }
}
