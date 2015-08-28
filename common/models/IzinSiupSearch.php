<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\IzinSiup;

/**
 * IzinSiupSearch represents the model behind the search form about `common\models\IzinSiup`.
 */
class IzinSiupSearch extends IzinSiup
{
    public function rules()
    {
        return [
            [['id', 'kelurahan_id'], 'integer'],
            [['jenis_permohonan', 'kategori_permohonan', 'nik', 'ktp', 'nama', 'alamat', 'tempat_lahir', 'tanggal_lahir', 'telepon', 'fax', 'passport', 'kewarganegaraan', 'jabatan_perusahaan', 'nama_perusahaan', 'alamat_perusahaan', 'telpon_perusahaan', 'fax_perusahaan', 'status_perusahaan', 'kode_pos', 'bentuk_perusahaan', 'akta_pendirian_no', 'akta_pendirian_tanggal', 'no_sk', 'no_daftar', 'tanggal_pengesahan', 'modal', 'nilai_saham_pma', 'saham_asing', 'barang_jasa_dagangan', 'tanggal_neraca', 'aktiva_lancar_kas', 'aktiva_lancar_bank', 'aktiva_lancar_piutang', 'aktiva_lancar_barang', 'aktiva_lancar_pekerjaan', 'aktiva_tetap_peralatan', 'aktiva_tetap_investasi', 'pasiva_hutang_dagang', 'pasiva_hutang_pajak', 'pasiva_hutang_lainnya', 'hutang_jangka_panjang', 'kekayaan_bersih'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = IzinSiup::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'tanggal_lahir' => $this->tanggal_lahir,
            'kelurahan_id' => $this->kelurahan_id,
            'akta_pendirian_tanggal' => $this->akta_pendirian_tanggal,
            'tanggal_pengesahan' => $this->tanggal_pengesahan,
            'tanggal_neraca' => $this->tanggal_neraca,
        ]);

        $query->andFilterWhere(['like', 'jenis_permohonan', $this->jenis_permohonan])
            ->andFilterWhere(['like', 'kategori_permohonan', $this->kategori_permohonan])
            ->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'ktp', $this->ktp])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'telepon', $this->telepon])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'passport', $this->passport])
            ->andFilterWhere(['like', 'kewarganegaraan', $this->kewarganegaraan])
            ->andFilterWhere(['like', 'jabatan_perusahaan', $this->jabatan_perusahaan])
            ->andFilterWhere(['like', 'nama_perusahaan', $this->nama_perusahaan])
            ->andFilterWhere(['like', 'alamat_perusahaan', $this->alamat_perusahaan])
            ->andFilterWhere(['like', 'telpon_perusahaan', $this->telpon_perusahaan])
            ->andFilterWhere(['like', 'fax_perusahaan', $this->fax_perusahaan])
            ->andFilterWhere(['like', 'status_perusahaan', $this->status_perusahaan])
            ->andFilterWhere(['like', 'kode_pos', $this->kode_pos])
            ->andFilterWhere(['like', 'bentuk_perusahaan', $this->bentuk_perusahaan])
            ->andFilterWhere(['like', 'akta_pendirian_no', $this->akta_pendirian_no])
            ->andFilterWhere(['like', 'no_sk', $this->no_sk])
            ->andFilterWhere(['like', 'no_daftar', $this->no_daftar])
            ->andFilterWhere(['like', 'modal', $this->modal])
            ->andFilterWhere(['like', 'nilai_saham_pma', $this->nilai_saham_pma])
            ->andFilterWhere(['like', 'saham_asing', $this->saham_asing])
            ->andFilterWhere(['like', 'barang_jasa_dagangan', $this->barang_jasa_dagangan])
            ->andFilterWhere(['like', 'aktiva_lancar_kas', $this->aktiva_lancar_kas])
            ->andFilterWhere(['like', 'aktiva_lancar_bank', $this->aktiva_lancar_bank])
            ->andFilterWhere(['like', 'aktiva_lancar_piutang', $this->aktiva_lancar_piutang])
            ->andFilterWhere(['like', 'aktiva_lancar_barang', $this->aktiva_lancar_barang])
            ->andFilterWhere(['like', 'aktiva_lancar_pekerjaan', $this->aktiva_lancar_pekerjaan])
            ->andFilterWhere(['like', 'aktiva_tetap_peralatan', $this->aktiva_tetap_peralatan])
            ->andFilterWhere(['like', 'aktiva_tetap_investasi', $this->aktiva_tetap_investasi])
            ->andFilterWhere(['like', 'pasiva_hutang_dagang', $this->pasiva_hutang_dagang])
            ->andFilterWhere(['like', 'pasiva_hutang_pajak', $this->pasiva_hutang_pajak])
            ->andFilterWhere(['like', 'pasiva_hutang_lainnya', $this->pasiva_hutang_lainnya])
            ->andFilterWhere(['like', 'hutang_jangka_panjang', $this->hutang_jangka_panjang])
            ->andFilterWhere(['like', 'kekayaan_bersih', $this->kekayaan_bersih]);

        return $dataProvider;
    }
}
