<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Perizinan;

/**
 * backend\models\PerizinanSearch represents the model behind the search form about `backend\models\Perizinan`.
 */
 class PerizinanSearch extends Perizinan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'parent_id', 'pemohon_id', 'id_groupizin', 'izin_id', 'no_urut', 'petugas_daftar_id', 'lokasi_id'], 'integer'],
            [['tanggal_mohon', 'no_izin', 'berkas_noizin', 'tanggal_izin', 'tanggal_expired', 'status', 'aktif', 'registrasi_urutan', 'nomor_sp_rt_rw', 'tanggal_sp_rt_rw', 'peruntukan', 'nama_perusahaan', 'tanggal_cek_lapangan', 'petugas_cek', 'status_daftar', 'keterangan', 'qr_code', 'tanggal_pertemuan', 'pengambilan_tanggal', 'pengambilan_jam'], 'safe'],
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
        $query = Perizinan::find();

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
            'pemohon_id' => $this->pemohon_id,
            'id_groupizin' => $this->id_groupizin,
            'izin_id' => $this->izin_id,
            'no_urut' => $this->no_urut,
            'tanggal_mohon' => $this->tanggal_mohon,
            'tanggal_izin' => $this->tanggal_izin,
            'tanggal_expired' => $this->tanggal_expired,
            'tanggal_sp_rt_rw' => $this->tanggal_sp_rt_rw,
            'tanggal_cek_lapangan' => $this->tanggal_cek_lapangan,
            'petugas_daftar_id' => $this->petugas_daftar_id,
            'lokasi_id' => $this->lokasi_id,
            'tanggal_pertemuan' => $this->tanggal_pertemuan,
            'pengambilan_tanggal' => $this->pengambilan_tanggal,
            'pengambilan_jam' => $this->pengambilan_jam,
        ]);

        $query->andFilterWhere(['like', 'no_izin', $this->no_izin])
            ->andFilterWhere(['like', 'berkas_noizin', $this->berkas_noizin])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'aktif', $this->aktif])
            ->andFilterWhere(['like', 'registrasi_urutan', $this->registrasi_urutan])
            ->andFilterWhere(['like', 'nomor_sp_rt_rw', $this->nomor_sp_rt_rw])
            ->andFilterWhere(['like', 'peruntukan', $this->peruntukan])
            ->andFilterWhere(['like', 'nama_perusahaan', $this->nama_perusahaan])
            ->andFilterWhere(['like', 'petugas_cek', $this->petugas_cek])
            ->andFilterWhere(['like', 'status_daftar', $this->status_daftar])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'qr_code', $this->qr_code]);

        return $dataProvider;
    }
}
