<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Bidang;

/**
 * frontend\models\BidangSearch represents the model behind the search form about `backend\models\Bidang`.
 */
 class BidangSearch extends Bidang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'parent_id', 'level_wewenang', 'durasi', 'arsip_id'], 'integer'],
            [['jenis', 'nama', 'fno_surat', 'link', 'aktif', 'cek_lapangan', 'cek_sprtrw', 'cek_obyek', 'cek_perusahaan', 'durasi_satuan', 'isi_latarbelakang', 'isi_syarat', 'isi_dasarhukum', 'definisi', 'mekanisme', 'pengaduan', 'brosur', 'kode_ijin', 'type'], 'safe'],
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
        $query = Bidang::find();

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
            'level_wewenang' => $this->level_wewenang,
            'biaya' => $this->biaya,
            'durasi' => $this->durasi,
            'arsip_id' => $this->arsip_id,
        ]);

        $query->andFilterWhere(['like', 'jenis', $this->jenis])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'fno_surat', $this->fno_surat])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'aktif', $this->aktif])
            ->andFilterWhere(['like', 'cek_lapangan', $this->cek_lapangan])
            ->andFilterWhere(['like', 'cek_sprtrw', $this->cek_sprtrw])
            ->andFilterWhere(['like', 'cek_obyek', $this->cek_obyek])
            ->andFilterWhere(['like', 'cek_perusahaan', $this->cek_perusahaan])
            ->andFilterWhere(['like', 'durasi_satuan', $this->durasi_satuan])
            ->andFilterWhere(['like', 'isi_latarbelakang', $this->isi_latarbelakang])
            ->andFilterWhere(['like', 'isi_syarat', $this->isi_syarat])
            ->andFilterWhere(['like', 'isi_dasarhukum', $this->isi_dasarhukum])
            ->andFilterWhere(['like', 'definisi', $this->definisi])
            ->andFilterWhere(['like', 'mekanisme', $this->mekanisme])
            ->andFilterWhere(['like', 'pengaduan', $this->pengaduan])
            ->andFilterWhere(['like', 'brosur', $this->brosur])
            ->andFilterWhere(['like', 'kode_ijin', $this->kode_ijin])
            ->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }
}
