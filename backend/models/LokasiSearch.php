<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Lokasi;

/**
 * backend\models\LokasiSearch represents the model behind the search form about `backend\models\Lokasi`.
 */
 class LokasiSearch extends Lokasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'propinsi', 'kabupaten_kota', 'kecamatan', 'kelurahan'], 'integer'],
            [['kode', 'nama', 'keterangan', 'aktif'], 'safe'],
            [['latitude', 'longtitude'], 'number'],
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
        $query = Lokasi::find();

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
            'latitude' => $this->latitude,
            'longtitude' => $this->longtitude,
            'propinsi' => $this->propinsi,
            'kabupaten_kota' => $this->kabupaten_kota,
            'kecamatan' => $this->kecamatan,
            'kelurahan' => $this->kelurahan,
        ]);

        $query->andFilterWhere(['like', 'kode', $this->kode])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'aktif', $this->aktif]);

        return $dataProvider;
    }
}
