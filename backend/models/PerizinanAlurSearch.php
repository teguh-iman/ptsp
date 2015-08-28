<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PerizinanAlur;

/**
 * backend\models\PerizinanAlurSearch represents the model behind the search form about `backend\models\PerizinanAlur`.
 */
 class PerizinanAlurSearch extends PerizinanAlur
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'perizinan_id', 'dokumen_izin_id', 'dokumen_pendukung_id', 'pelaksana_id'], 'integer'],
            [['isi_dok_pendukung', 'tanggal_proses', 'pelaksana', 'dok_input', 'dok_proses', 'dok_output', 'nama_modul', 'nama_berkas', 'berkas', 'berkas_seo', 'status', 'tanggal', 'valid', 'keterangan', 'mulai', 'selesai', 'jarak', 'mekanisme_cek', 'aktif', 'duration', 'registrasi_action', 'jarak_sebelum', 'jarak_sekarang', 'type'], 'safe'],
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
        $query = PerizinanAlur::find();

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
            'perizinan_id' => $this->perizinan_id,
            'dokumen_izin_id' => $this->dokumen_izin_id,
            'dokumen_pendukung_id' => $this->dokumen_pendukung_id,
            'pelaksana_id' => $this->pelaksana_id,
            'tanggal_proses' => $this->tanggal_proses,
            'tanggal' => $this->tanggal,
            'mulai' => $this->mulai,
            'selesai' => $this->selesai,
        ]);

        $query->andFilterWhere(['like', 'isi_dok_pendukung', $this->isi_dok_pendukung])
            ->andFilterWhere(['like', 'pelaksana', $this->pelaksana])
            ->andFilterWhere(['like', 'dok_input', $this->dok_input])
            ->andFilterWhere(['like', 'dok_proses', $this->dok_proses])
            ->andFilterWhere(['like', 'dok_output', $this->dok_output])
            ->andFilterWhere(['like', 'nama_modul', $this->nama_modul])
            ->andFilterWhere(['like', 'nama_berkas', $this->nama_berkas])
            ->andFilterWhere(['like', 'berkas', $this->berkas])
            ->andFilterWhere(['like', 'berkas_seo', $this->berkas_seo])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'valid', $this->valid])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'jarak', $this->jarak])
            ->andFilterWhere(['like', 'mekanisme_cek', $this->mekanisme_cek])
            ->andFilterWhere(['like', 'aktif', $this->aktif])
            ->andFilterWhere(['like', 'duration', $this->duration])
            ->andFilterWhere(['like', 'registrasi_action', $this->registrasi_action])
            ->andFilterWhere(['like', 'jarak_sebelum', $this->jarak_sebelum])
            ->andFilterWhere(['like', 'jarak_sekarang', $this->jarak_sekarang])
            ->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }
}
