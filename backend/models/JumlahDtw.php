<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "jumlah_dtw".
 *
 * @property string $nama_destinasi
 * @property string $bulan
 * @property float|null $Jumlah_wisman
 * @property float|null $jumlah_wisnus
 * @property float|null $Total
 */
class JumlahDtw extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jumlah_dtw';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_destinasi', 'bulan'], 'required'],
            [['Jumlah_wisman', 'jumlah_wisnus', 'Total'], 'number'],
            [['nama_destinasi'], 'string', 'max' => 50],
            [['bulan'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nama_destinasi' => 'Nama Destinasi',
            'bulan' => 'Bulan',
            'Jumlah_wisman' => 'Jumlah Wisman',
            'jumlah_wisnus' => 'Jumlah Wisnus',
            'Total' => 'Total',
        ];
    }
    public static function primaryKey(){

            return 'my_view_id';

        }
}
