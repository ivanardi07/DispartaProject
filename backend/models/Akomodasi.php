<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "akomodasi".
 *
 * @property int $id_akomodasi
 * @property string $nama_akomodasi
 * @property int $kecamatan
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
            [['nama_akomodasi', 'kecamatan'], 'required'],
            [['nama_akomodasi','kecamatan'], 'string', 'max' => 50],
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
        ];
    }
}
