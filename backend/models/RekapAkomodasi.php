<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rekap_akomodasi".
 *
 * @property int $id_akomodasi
 * @property int $nama_akomodasi
 * @property string $kecamatan
 * @property string $bulan
 * @property int $minggu
 * @property string $jenis_wisatawan
 * @property int $jumlah
 * @property int $total
 */
class RekapAkomodasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rekap_akomodasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_akomodasi', 'kecamatan', 'bulan', 'minggu', 'jumlah_wisnus', 'jumlah_wisman', 'total'], 'required'],
            [['nama_akomodasi', 'minggu', 'jumlah_wisnus','jumlah_wisman', 'total'], 'integer'],
            [['kecamatan', 'bulan'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_akomodasi' => 'Id Akomodasi',
            'nama_akomodasi' => 'Nama Akomodasi',
            'kecamatan' => 'Kecamatan',
            'bulan' => 'Bulan',
            'minggu' => 'Minggu',
            'jumlah_wisnus' => 'Wisatawan Nusantara',
            'jumlah_wisman' => 'Wisatawan Mancanegara',
            'total' => 'Total',
        ];
    }
}
