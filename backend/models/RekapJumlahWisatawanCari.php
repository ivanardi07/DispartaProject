<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RekapJumlahWisatawan;

/**
 * RekapJumlahWisatawanCari represents the model behind the search form of `backend\models\RekapJumlahWisatawan`.
 */
class RekapJumlahWisatawanCari extends RekapJumlahWisatawan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_rekap_wisatawan', 'jumlah', 'total'], 'integer'],
            [['bulan', 'jenis_wisatawan', 'jenis_destinasi'], 'safe'],
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
        $query = RekapJumlahWisatawan::find();

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
            'id_rekap_wisatawan' => $this->id_rekap_wisatawan,
            'jumlah' => $this->jumlah,
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['like', 'bulan', $this->bulan])
            ->andFilterWhere(['like', 'jenis_wisatawan', $this->jenis_wisatawan])
            ->andFilterWhere(['like', 'jenis_destinasi', $this->jenis_destinasi]);

        return $dataProvider;
    }
}
