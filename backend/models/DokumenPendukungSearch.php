<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DokumenPendukung;

/**
 * backend\models\DokumenPendukungSearch represents the model behind the search form about `backend\models\DokumenPendukung`.
 */
 class DokumenPendukungSearch extends DokumenPendukung
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'izin_id', 'urutan'], 'integer'],
            [['kategori', 'isi', 'file', 'tipe'], 'safe'],
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
        $query = DokumenPendukung::find();

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
            'urutan' => $this->urutan,
        ]);

        $query->andFilterWhere(['like', 'kategori', $this->kategori])
            ->andFilterWhere(['like', 'isi', $this->isi])
            ->andFilterWhere(['like', 'file', $this->file])
            ->andFilterWhere(['like', 'tipe', $this->tipe]);

        return $dataProvider;
    }
}
