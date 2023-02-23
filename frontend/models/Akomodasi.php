<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "akomodasi".
 *
 * @property int $id_akomodasi
 * @property string $nama_akomodasi
 * @property int $kecamatan
 * @property string $nama_kecamatan
 */
class Akomodasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'akomodasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_akomodasi', 'kecamatan', 'nama_kecamatan'], 'required'],
            [['kecamatan'], 'integer'],
            [['nama_akomodasi'], 'string', 'max' => 50],
            [['nama_kecamatan'], 'string', 'max' => 15],
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
            'nama_kecamatan' => 'Nama Kecamatan',
        ];
    }
}
