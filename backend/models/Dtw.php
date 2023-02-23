<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dtw".
 *
 * @property int $id_dtw
 * @property int $nama_dtw
 * @property int $kecamatan
 */
class Dtw extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dtw';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_dtw', 'kecamatan'], 'required'],
            [['nama_dtw','kecamatan'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_dtw' => 'Id Dtw',
            'nama_dtw' => 'Nama Daya Tarik Wisata',
            'kecamatan' => 'Kecamatan',
        ];
    }
}
