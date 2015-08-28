<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Izin;

/**
 * backend\models\IzinSearch represents the model behind the search form about `backend\models\Izin`.
 */
 class IzinSearch extends Izin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'bidang_id', 'wewenang_id', 'durasi', 'arsip_id'], 'integer'],
            [['jenis', 'nama', 'kode', 'fno_surat', 'aktif', 'cek_lapangan', 'cek_sprtrw', 'cek_obyek', 'cek_perusahaan', 'durasi_satuan', 'latar_belakang', 'persyaratan', 'mekanisme', 'pengaduan', 'dasar_hukum', 'definisi', 'brosur', 'type', 'action'], 'safe'],
            [['biaya'], 'number'],
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
        $query = Izin::find();

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
            'bidang_id' => $this->bidang_id,
            'wewenang_id' => $this->wewenang_id,
            'durasi' => $this->durasi,
            'biaya' => $this->biaya,
            'arsip_id' => $this->arsip_id,
        ]);

        $query->andFilterWhere(['like', 'jenis', $this->jenis])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'kode', $this->kode])
            ->andFilterWhere(['like', 'fno_surat', $this->fno_surat])
            ->andFilterWhere(['like', 'aktif', $this->aktif])
            ->andFilterWhere(['like', 'cek_lapangan', $this->cek_lapangan])
            ->andFilterWhere(['like', 'cek_sprtrw', $this->cek_sprtrw])
            ->andFilterWhere(['like', 'cek_obyek', $this->cek_obyek])
            ->andFilterWhere(['like', 'cek_perusahaan', $this->cek_perusahaan])
            ->andFilterWhere(['like', 'durasi_satuan', $this->durasi_satuan])
            ->andFilterWhere(['like', 'latar_belakang', $this->latar_belakang])
            ->andFilterWhere(['like', 'persyaratan', $this->persyaratan])
            ->andFilterWhere(['like', 'mekanisme', $this->mekanisme])
            ->andFilterWhere(['like', 'pengaduan', $this->pengaduan])
            ->andFilterWhere(['like', 'dasar_hukum', $this->dasar_hukum])
            ->andFilterWhere(['like', 'definisi', $this->definisi])
            ->andFilterWhere(['like', 'brosur', $this->brosur])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'action', $this->action]);

        return $dataProvider;
    }
}
