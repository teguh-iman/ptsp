<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\MekanismePelayanan;

/**
 * backend\models\MekanismePelayananSearch represents the model behind the search form about `backend\models\MekanismePelayanan`.
 */
 class MekanismePelayananSearch extends MekanismePelayanan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'izin_id', 'pelaksana_id', 'dok_input', 'dok_proses', 'dok_output', 'durasi', 'dur_sat', 'dur_sat1', 'dur_sat2', 'dur_sat3', 'urutan'], 'integer'],
            [['isi', 'berkas', 'durasi_satuan', 'dokpendukung_tipe', 'aktif', 'petugas_cek'], 'safe'],
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
        $query = MekanismePelayanan::find();

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
            'izin_id' => $this->izin_id,
            'pelaksana_id' => $this->pelaksana_id,
            'dok_input' => $this->dok_input,
            'dok_proses' => $this->dok_proses,
            'dok_output' => $this->dok_output,
            'durasi' => $this->durasi,
            'dur_sat' => $this->dur_sat,
            'dur_sat1' => $this->dur_sat1,
            'dur_sat2' => $this->dur_sat2,
            'dur_sat3' => $this->dur_sat3,
            'urutan' => $this->urutan,
        ]);

        $query->andFilterWhere(['like', 'isi', $this->isi])
            ->andFilterWhere(['like', 'berkas', $this->berkas])
            ->andFilterWhere(['like', 'durasi_satuan', $this->durasi_satuan])
            ->andFilterWhere(['like', 'dokpendukung_tipe', $this->dokpendukung_tipe])
            ->andFilterWhere(['like', 'aktif', $this->aktif])
            ->andFilterWhere(['like', 'petugas_cek', $this->petugas_cek]);

        return $dataProvider;
    }
}
