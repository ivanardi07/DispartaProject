<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kategori_akw".
 *
 * @property int $id
 * @property string $kategori_akw
 *
 * @property LaporanKunjungan[] $laporanKunjungans
 */
class KategoriAkw extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori_akw';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kategori_akw'], 'required'],
            [['kategori_akw'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kategori_akw' => 'Kategori Akw',
        ];
    }

    /**
     * Gets query for [[LaporanKunjungans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaporanKunjungans()
    {
        return $this->hasMany(LaporanKunjungan::className(), ['kategori_akw' => 'id']);
    }
}
