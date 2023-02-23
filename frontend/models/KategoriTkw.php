<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kategori_tkw".
 *
 * @property int $id
 * @property string $kategori_tkw
 *
 * @property Users[] $users
 */
class KategoriTkw extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori_tkw';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kategori_tkw'], 'required'],
            [['kategori_tkw'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kategori_tkw' => 'Kategori Tkw',
        ];
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['kategori_tkw' => 'id']);
    }
}
