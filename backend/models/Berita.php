<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "berita".
 *
 * @property int $id_berita
 * @property string $judul_berita
 * @property string $deskripsi_singkat
 * @property string $deskripsi
 * @property string $gambar
 * @property string $tanggal
 */
class Berita extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'berita';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul_berita', 'deskripsi_singkat', 'deskripsi', 'gambar', 'tanggal'], 'required'],
            [['deskripsi'], 'string'],
            [['tanggal'], 'safe'],
            [['judul_berita', 'gambar'], 'string', 'max' => 50],
            [['deskripsi_singkat'], 'string', 'max' => 100],
            ['image', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'],
            ['title, image', 'length', 'max'=>255, 'on'=>'insert,update'], 
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_berita' => 'Id Berita',
            'judul_berita' => 'Judul Berita',
            'deskripsi_singkat' => 'Deskripsi Singkat',
            'deskripsi' => 'Deskripsi',
            'gambar' => 'Gambar',
            'tanggal' => 'Tanggal',
        ];
    }
}
