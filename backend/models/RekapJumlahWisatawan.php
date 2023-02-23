<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rekap_jumlah_wisatawan".
 *
 * @property int $id_rekap_wisatawan
 * @property string $bulan
 * @property string $jenis_wisatawan
 * @property string $jenis_destinasi
 * @property int $jumlah
 * @property int $total
 */
class RekapJumlahWisatawan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rekap_jumlah_wisatawan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bulan', 'jenis_wisatawan', 'jenis_destinasi', 'jumlah', 'total'], 'required'],
            [['jumlah', 'total'], 'integer'],
            [['bulan'], 'string', 'max' => 10],
            [['jenis_wisatawan', 'jenis_destinasi'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_rekap_wisatawan' => 'Id Rekap Wisatawan',
            'bulan' => 'Bulan',
            'jenis_wisatawan' => 'Jenis Wisatawan',
            'jenis_destinasi' => 'Jenis Destinasi',
            'jumlah' => 'Jumlah',
            'total' => 'Total',
        ];
    }
}
