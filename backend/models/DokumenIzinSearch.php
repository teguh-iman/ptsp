<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DokumenIzin;

/**
 * backend\models\DokumenIzinSearch represents the model behind the search form about `backend\models\DokumenIzin`.
 */
 class DokumenIzinSearch extends DokumenIzin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'izin_id'], 'integer'],
            [['judul', 'isi', 'file', 'aktif'], 'safe'],
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
        $query = DokumenIzin::find();

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
        ]);

        $query->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'isi', $this->isi])
            ->andFilterWhere(['like', 'file', $this->file])
            ->andFilterWhere(['like', 'aktif', $this->aktif]);

        return $dataProvider;
    }
}
