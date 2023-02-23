<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Dtw;

/**
 * DtwCari represents the model behind the search form of `backend\models\Dtw`.
 */
class DtwCari extends Dtw
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_dtw', 'nama_dtw', 'kecamatan'], 'integer'],
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
        $query = Dtw::find();

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
            'nama_dtw' => $this->nama_dtw,
            'kecamatan' => $this->kecamatan,
        ]);

        return $dataProvider;
    }
}
