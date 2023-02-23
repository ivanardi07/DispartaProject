<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\LaporanKunjungan;

/**
 * LaporanKunjunganCari represents the model behind the search form of `backend\models\LaporanKunjungan`.
 */
class LaporanKunjunganCari extends LaporanKunjungan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_laporan_kunjungan', 'id_user', 'negara', 'provinsi', 'pria', 'wanita', 'jumlah'], 'integer'],
            [['jenis_wisatawan'], 'safe'],
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
        $query = LaporanKunjungan::find();

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
            'id_laporan_kunjungan' => $this->id_laporan_kunjungan,
            'id_user' => $this->id_user,
            'negara' => $this->negara,
            'provinsi' => $this->provinsi,
            'pria' => $this->pria,
            'wanita' => $this->wanita,
            'jumlah' => $this->jumlah,
        ]);

        $query->andFilterWhere(['like', 'jenis_wisatawan', $this->jenis_wisatawan]);

        return $dataProvider;
    }
}
