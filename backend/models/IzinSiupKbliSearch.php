<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\IzinSiupKbli;

/**
 * backend\models\IzinSiupKbliSearch represents the model behind the search form about `backend\models\IzinSiupKbli`.
 */
 class IzinSiupKbliSearch extends IzinSiupKbli
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'izin_siup_id', 'kbli_id'], 'integer'],
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
        $query = IzinSiupKbli::find();

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
            'kbli_id' => $this->kbli_id,
        ]);

        return $dataProvider;
    }
}
