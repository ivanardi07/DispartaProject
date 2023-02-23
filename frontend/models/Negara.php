<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "negara".
 *
 * @property int $id
 * @property string $negara
 * @property string $kawasan
 *
 * @property LaporanKunjungan[] $laporanKunjungans
 */
class Negara extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'negara';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['negara', 'kawasan'], 'required'],
            [['negara', 'kawasan'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'negara' => 'Negara',
            'kawasan' => 'Kawasan',
        ];
    }

    /**
     * Gets query for [[LaporanKunjungans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaporanKunjungans()
    {
        return $this->hasMany(LaporanKunjungan::className(), ['negara' => 'id']);
    }
}
