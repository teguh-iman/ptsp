<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\IzinSiupAkta;

/**
 * backend\models\IzinSiupAktaSearch represents the model behind the search form about `backend\models\IzinSiupAkta`.
 */
 class IzinSiupAktaSearch extends IzinSiupAkta
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'izin_siup_id'], 'integer'],
            [['nomor_akta', 'tanggal_akta', 'nomor_pengesahan', 'tanggal_pengesahan'], 'safe'],
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
        $query = IzinSiupAkta::find();

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
            'izin_siup_id' => $this->izin_siup_id,
            'tanggal_akta' => $this->tanggal_akta,
            'tanggal_pengesahan' => $this->tanggal_pengesahan,
        ]);

        $query->andFilterWhere(['like', 'nomor_akta', $this->nomor_akta])
            ->andFilterWhere(['like', 'nomor_pengesahan', $this->nomor_pengesahan]);

        return $dataProvider;
    }
}
