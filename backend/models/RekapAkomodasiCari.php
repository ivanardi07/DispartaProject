<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RekapAkomodasi;

/**
 * RekapAkomodasiCari represents the model behind the search form of `backend\models\RekapAkomodasi`.
 */
class RekapAkomodasiCari extends RekapAkomodasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_akomodasi', 'nama_akomodasi', 'minggu', 'jumlah_wisnus','jumlah_wisman', 'total'], 'integer'],
            [['kecamatan', 'bulan'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = RekapAkomodasi::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_akomodasi' => $this->id_akomodasi,
            'nama_akomodasi' => $this->nama_akomodasi,
            'minggu' => $this->minggu,
            'jumlah_wisnus' => $this->jumlah_wisnus,
            'jumlah_wisman' => $this->jumlah_wisman,
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['like', 'kecamatan', $this->kecamatan])
            ->andFilterWhere(['like', 'bulan', $this->bulan]);

        return $dataProvider;
    }
}
