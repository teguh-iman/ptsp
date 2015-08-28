<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\IzinSiup;

/**
 * frontend\models\IzinSiupSearch represents the model behind the search form about `backend\models\IzinSiup`.
 */
 class IzinSiupSearch extends IzinSiup
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'bidang_id', 'user_id', 'kelurahan_id'], 'integer'],
            [['ktp', 'nama', 'alamat', 'tempat_lahir', 'tanggal_lahir', 'telepon', 'fax', 'passport', 'kewarganegaraan', 'jabatan_perusahaan', 'npwp_perusahaan', 'nama_perusahaan', 'alamat_perusahaan', 'telpon_perusahaan', 'fax_perusahaan', 'status_perusahaan', 'kode_pos', 'bentuk_perusahaan', 'akta_pendirian_no', 'akta_pendirian_tanggal', 'akta_pengesahan_no', 'akta_pengesahan_tanggal', 'no_sk', 'no_daftar', 'tanggal_pengesahan', 'barang_jasa_dagangan', 'tanggal_neraca'], 'safe'],
            [['modal', 'nilai_saham_pma', 'saham_nasional', 'saham_asing', 'aktiva_lancar_kas', 'aktiva_lancar_bank', 'aktiva_lancar_piutang', 'aktiva_lancar_barang', 'aktiva_lancar_pekerjaan', 'aktiva_tetap_peralatan', 'aktiva_tetap_investasi', 'aktiva_lainnya', 'pasiva_hutang_dagang', 'pasiva_hutang_pajak', 'pasiva_hutang_lainnya', 'hutang_jangka_panjang', 'kekayaan_bersih'], 'number'],
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
        $query = IzinSiup::find();

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
            'bidang_id' => $this->bidang_id,
            'user_id' => $this->user_id,
            'tanggal_lahir' => $this->tanggal_lahir,
            'kelurahan_id' => $this->kelurahan_id,
            'akta_pendirian_tanggal' => $this->akta_pendirian_tanggal,
            'akta_pengesahan_tanggal' => $this->akta_pengesahan_tanggal,
            'tanggal_pengesahan' => $this->tanggal_pengesahan,
            'modal' => $this->modal,
            'nilai_saham_pma' => $this->nilai_saham_pma,
            'saham_nasional' => $this->saham_nasional,
            'saham_asing' => $this->saham_asing,
            'tanggal_neraca' => $this->tanggal_neraca,
            'aktiva_lancar_kas' => $this->aktiva_lancar_kas,
            'aktiva_lancar_bank' => $this->aktiva_lancar_bank,
            'aktiva_lancar_piutang' => $this->aktiva_lancar_piutang,
            'aktiva_lancar_barang' => $this->aktiva_lancar_barang,
            'aktiva_lancar_pekerjaan' => $this->aktiva_lancar_pekerjaan,
            'aktiva_tetap_peralatan' => $this->aktiva_tetap_peralatan,
            'aktiva_tetap_investasi' => $this->aktiva_tetap_investasi,
            'aktiva_lainnya' => $this->aktiva_lainnya,
            'pasiva_hutang_dagang' => $this->pasiva_hutang_dagang,
            'pasiva_hutang_pajak' => $this->pasiva_hutang_pajak,
            'pasiva_hutang_lainnya' => $this->pasiva_hutang_lainnya,
            'hutang_jangka_panjang' => $this->hutang_jangka_panjang,
            'kekayaan_bersih' => $this->kekayaan_bersih,
        ]);

        $query->andFilterWhere(['like', 'ktp', $this->ktp])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'telepon', $this->telepon])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'passport', $this->passport])
            ->andFilterWhere(['like', 'kewarganegaraan', $this->kewarganegaraan])
            ->andFilterWhere(['like', 'jabatan_perusahaan', $this->jabatan_perusahaan])
            ->andFilterWhere(['like', 'npwp_perusahaan', $this->npwp_perusahaan])
            ->andFilterWhere(['like', 'nama_perusahaan', $this->nama_perusahaan])
            ->andFilterWhere(['like', 'alamat_perusahaan', $this->alamat_perusahaan])
            ->andFilterWhere(['like', 'telpon_perusahaan', $this->telpon_perusahaan])
            ->andFilterWhere(['like', 'fax_perusahaan', $this->fax_perusahaan])
            ->andFilterWhere(['like', 'status_perusahaan', $this->status_perusahaan])
            ->andFilterWhere(['like', 'kode_pos', $this->kode_pos])
            ->andFilterWhere(['like', 'bentuk_perusahaan', $this->bentuk_perusahaan])
            ->andFilterWhere(['like', 'akta_pendirian_no', $this->akta_pendirian_no])
            ->andFilterWhere(['like', 'akta_pengesahan_no', $this->akta_pengesahan_no])
            ->andFilterWhere(['like', 'no_sk', $this->no_sk])
            ->andFilterWhere(['like', 'no_daftar', $this->no_daftar])
            ->andFilterWhere(['like', 'barang_jasa_dagangan', $this->barang_jasa_dagangan]);

        return $dataProvider;
    }
}
