<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dtw".
 *
 * @property int $id_dtw
 * @property string $nama_dtw
 * @property int $kecamatan
 * @property string $nama_kecamatan
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
            [['nama_dtw', 'kecamatan', 'nama_kecamatan'], 'required'],
            [['kecamatan'], 'integer'],
            [['nama_dtw'], 'string', 'max' => 50],
            [['nama_kecamatan'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_dtw' => 'Id Dtw',
            'nama_dtw' => 'Nama Dtw',
            'kecamatan' => 'Kecamatan',
            'nama_kecamatan' => 'Nama Kecamatan',
        ];
    }
}
