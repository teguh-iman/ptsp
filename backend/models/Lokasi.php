<?php

namespace backend\models;

use Yii;
use \backend\models\base\Lokasi as BaseLokasi;

/**
 * This is the model class for table "lokasi".
 */
class Lokasi extends BaseLokasi
{
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['keterangan', 'latitude', 'longtitude', 'propinsi', 'kecamatan', 'kelurahan'], 'required'],
            [['keterangan', 'aktif'], 'string'],
            [['latitude', 'longtitude'], 'number'],
            [['propinsi', 'kabupaten_kota', 'kecamatan', 'kelurahan'], 'integer'],
            [['kode'], 'string', 'max' => 50],
            [['nama'], 'string', 'max' => 100]
        ];
    }
    
    public static function getKabKotaOptions(){
         $data = static::find()->where(['propinsi'=>31])
                 ->andWhere('kabupaten_kota <> 00')
                 ->andWhere('kecamatan = 00')->all();
//                 ->select(['lokasi_kabupatenkota','lokasi_nama as name'])->all();
        $value = (count($data) == 0) ? ['' => ''] : \yii\helpers\ArrayHelper::map($data, 'kabupaten_kota','nama');

        return $value;
    }
    
    public static function getKecamatanOptions($kabkota_id){
         $data = static::find()->where(['kabupaten_kota' => $kabkota_id])
                 ->andWhere('propinsi = 31')
                 ->andWhere('kelurahan = 0000')
                 ->andWhere('kecamatan <> 00')
                 ->select(['kecamatan as id','nama as name'])->asArray()->all();
        $value = (count($data) == 0) ? ['' => ''] : $data;

        return $value;
    }
    
    public static function getKelurahanOptions($kabkota_id,$kec_id){
         $data1 = static::find()->where(['kabupaten_kota' => $kabkota_id])
                 ->andWhere(['kecamatan' => $kec_id])
                 ->andWhere('propinsi = 31')
                 ->andWhere('kelurahan <> 0000')
                 ->select(['kelurahan as id','nama as name'])->asArray()->all();
// var_dump($data1);exit();
        $value = (count($data1) == 0) ? ['' => ''] : $data1;

        return $value;
    }
	
}
