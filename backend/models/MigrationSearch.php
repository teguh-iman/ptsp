<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Migration;

/**
 * backend\models\MigrationSearch represents the model behind the search form about `backend\models\Migration`.
 */
 class MigrationSearch extends Migration
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['version'], 'safe'],
            [['apply_time'], 'integer'],
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
        $query = Migration::find();

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
            'apply_time' => $this->apply_time,
        ]);

        $query->andFilterWhere(['like', 'version', $this->version]);

        return $dataProvider;
    }
}
