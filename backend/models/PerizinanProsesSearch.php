<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PerizinanProses;

/**
 * backend\models\PerizinanProsesSearch represents the model behind the search form about `backend\models\PerizinanProses`.
 */
 class PerizinanProsesSearch extends PerizinanProses
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'perizinan_id', 'mekanisme_pelayanan_id', 'pelaksana_id', 'urutan', 'jumlah_tahap', 'active'], 'integer'],
            [['tanggal_proses', 'isi_dokumen', 'pelaksana', 'dok_input', 'dok_proses', 'dok_output', 'nama_berkas', 'berkas', 'berkas_seo', 'status', 'keterangan', 'tanggal', 'valid', 'mulai', 'selesai', 'jarak', 'mekanisme_cek', 'aktif', 'jarak_sebelum', 'jarak_sekarang', 'type'], 'safe'],
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
        $query = PerizinanProses::find();

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
            'perizinan_id' => $this->perizinan_id,
            'mekanisme_pelayanan_id' => $this->mekanisme_pelayanan_id,
            'pelaksana_id' => $this->pelaksana_id,
            'urutan' => $this->urutan,
            'jumlah_tahap' => $this->jumlah_tahap,
            'active' => $this->active,
            'tanggal_proses' => $this->tanggal_proses,
            'tanggal' => $this->tanggal,
            'mulai' => $this->mulai,
            'selesai' => $this->selesai,
        ]);

        $query->andFilterWhere(['like', 'isi_dokumen', $this->isi_dokumen])
            ->andFilterWhere(['like', 'pelaksana', $this->pelaksana])
            ->andFilterWhere(['like', 'dok_input', $this->dok_input])
            ->andFilterWhere(['like', 'dok_proses', $this->dok_proses])
            ->andFilterWhere(['like', 'dok_output', $this->dok_output])
            ->andFilterWhere(['like', 'nama_berkas', $this->nama_berkas])
            ->andFilterWhere(['like', 'berkas', $this->berkas])
            ->andFilterWhere(['like', 'berkas_seo', $this->berkas_seo])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'valid', $this->valid])
            ->andFilterWhere(['like', 'jarak', $this->jarak])
            ->andFilterWhere(['like', 'mekanisme_cek', $this->mekanisme_cek])
            ->andFilterWhere(['like', 'aktif', $this->aktif])
            ->andFilterWhere(['like', 'jarak_sebelum', $this->jarak_sebelum])
            ->andFilterWhere(['like', 'jarak_sekarang', $this->jarak_sekarang])
            ->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }
}
