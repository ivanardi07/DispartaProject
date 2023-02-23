<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "jumlah_akomodasi".
 *
 * @property int $id_akomodasi
 * @property int $nama_akomodasi
 * @property string $bulan
 * @property float|null $Jumlah_wisman
 * @property float|null $jumlah_wisnus
 * @property float|null $Total
 */
class JumlahAkomodasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jumlah_akomodasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_akomodasi', 'nama_akomodasi'], 'integer'],
            [['nama_akomodasi', 'bulan'], 'required'],
            [['Jumlah_wisman', 'jumlah_wisnus', 'Total'], 'number'],
            [['bulan'], 'string', 'max' => 50],
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
            'bulan' => 'Bulan',
            'Jumlah_wisman' => 'Jumlah Wisman',
            'jumlah_wisnus' => 'Jumlah Wisnus',
            'Total' => 'Total',
        ];
    }
}
