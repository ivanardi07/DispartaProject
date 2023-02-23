<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RekapDtw;

/**
 * RekapdtwwCari represents the model behind the search form of `backend\models\RekapDtw`.
 */
class RekapdtwwCari extends RekapDtw
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_dtw', 'kecamatan', 'minggu', 'jumlah_wisnus', 'jumlah_wisman', 'total'], 'integer'],
            [['nama_destinasi', 'bulan'], 'safe'],
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
        $query = RekapDtw::find();

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
            'id_dtw' => $this->id_dtw,
            'kecamatan' => $this->kecamatan,
            'minggu' => $this->minggu,
            'jumlah_wisnus' => $this->jumlah_wisnus,
            'jumlah_wisman' => $this->jumlah_wisman,
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['like', 'nama_destinasi', $this->nama_destinasi])
            ->andFilterWhere(['like', 'bulan', $this->bulan]);

        return $dataProvider;
    }
}
