<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RegistrasiProses;

/**
 * backend\models\RegistrasiProsesSearch represents the model behind the search form about `backend\models\RegistrasiProses`.
 */
class RegistrasiProsesSearch extends RegistrasiProses {

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id', 'registrasi_id', 'dokumen_pendukung_id', 'pelaksana_id', 'user_id', 'aktif'], 'integer'],
            [['modul', 'tanggal_proses', 'status', 'dokumen', 'approval', 'pelaksana', 'nama_berkas', 'berkas', 'keterangan', 'type'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios() {
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
    public function search($params) {
        $query = RegistrasiProses::find();

        if (Yii::$app->user->can('Petugas'))
            $query->where('pelaksana_id=' . \Yii::$app->user->identity->pelaksana_id . ' and aktif = 1');

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
            'registrasi_id' => $this->registrasi_id,
            'dokumen_pendukung_id' => $this->dokumen_pendukung_id,
            'pelaksana_id' => $this->pelaksana_id,
            'user_id' => $this->user_id,
            'aktif' => $this->aktif,
            'tanggal_proses' => $this->tanggal_proses,
        ]);

        $query->andFilterWhere(['like', 'modul', $this->modul])
                ->andFilterWhere(['like', 'status', $this->status])
                ->andFilterWhere(['like', 'dokumen', $this->dokumen])
                ->andFilterWhere(['like', 'approval', $this->approval])
                ->andFilterWhere(['like', 'pelaksana', $this->pelaksana])
                ->andFilterWhere(['like', 'nama_berkas', $this->nama_berkas])
                ->andFilterWhere(['like', 'berkas', $this->berkas])
                ->andFilterWhere(['like', 'keterangan', $this->keterangan])
                ->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }

}
