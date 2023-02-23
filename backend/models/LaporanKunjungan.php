<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "laporan_kunjungan".
 *
 * @property int $id_laporan_kunjungan
 * @property int $id_user
 * @property string $jenis_wisatawan
 * @property int $negara
 * @property int $provinsi
 * @property int $pria
 * @property int $wanita
 * @property int $jumlah
 *
 * @property Negara $negara0
 * @property Provinsi $provinsi0
 */
class LaporanKunjungan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'laporan_kunjungan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'jenis_wisatawan', 'negara', 'provinsi', 'pria', 'wanita', 'jumlah'], 'required'],
            [['id_user', 'negara', 'provinsi', 'pria', 'wanita', 'jumlah'], 'integer'],
            [['jenis_wisatawan'], 'string', 'max' => 25],
            [['negara'], 'exist', 'skipOnError' => true, 'targetClass' => Negara::className(), 'targetAttribute' => ['negara' => 'id_negara']],
            [['provinsi'], 'exist', 'skipOnError' => true, 'targetClass' => Provinsi::className(), 'targetAttribute' => ['provinsi' => 'id_provinsi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_laporan_kunjungan' => 'Id Laporan Kunjungan',
            'id_user' => 'Id User',
            'jenis_wisatawan' => 'Jenis Wisatawan',
            'negara' => 'Negara',
            'provinsi' => 'Provinsi',
            'pria' => 'Pria',
            'wanita' => 'Wanita',
            'jumlah' => 'Jumlah',
        ];
    }

    /**
     * Gets query for [[Negara0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNegara0()
    {
        return $this->hasOne(Negara::className(), ['id_negara' =>'negara']);
    }

    /**
     * Gets query for [[Provinsi0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProvinsi0()
    {
        return $this->hasOne(Provinsi::className(), ['id_provinsi' => 'provinsi']);
    }
}
