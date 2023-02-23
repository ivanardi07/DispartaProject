<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $nama_dtw
 * @property int $kategori_tkw
 * @property string $authKey
 * @property string $accesToken
 * @property string $role
 *
 * @property LaporanKunjungan[] $laporanKunjungans
 * @property KategoriTkw $kategoriTkw
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'nama_dtw', 'kategori_tkw', 'authKey', 'accesToken', 'role'], 'required'],
            [['kategori_tkw'], 'integer'],
            [['username', 'role'], 'string', 'max' => 10],
            [['password'], 'string', 'max' => 15],
            [['nama_dtw', 'authKey', 'accesToken'], 'string', 'max' => 50],
            [['kategori_tkw'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriTkw::className(), 'targetAttribute' => ['kategori_tkw' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'nama_dtw' => 'Nama Dtw',
            'kategori_tkw' => 'Kategori Tkw',
            'authKey' => 'Auth Key',
            'accesToken' => 'Acces Token',
            'role' => 'Role',
        ];
    }

    /**
     * Gets query for [[LaporanKunjungans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaporanKunjungans()
    {
        return $this->hasMany(LaporanKunjungan::className(), ['id_user' => 'id']);
    }

    /**
     * Gets query for [[KategoriTkw]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriTkw()
    {
        return $this->hasOne(KategoriTkw::className(), ['id' => 'kategori_tkw']);
    }
}
