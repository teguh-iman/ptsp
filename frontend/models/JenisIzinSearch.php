<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\JenisIzin;

/**
 * JenisIzinSearch represents the model behind the search form about `backend\models\JenisIzin`.
 */
class JenisIzinSearch extends JenisIzin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'bidang_id'], 'integer'],
            [['nama', 'action'], 'safe'],
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
        $query = JenisIzin::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'bidang_id' => $this->bidang_id,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'action', $this->action]);

        return $dataProvider;
    }
}
