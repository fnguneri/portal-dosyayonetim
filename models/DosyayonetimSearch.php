<?php

namespace kouosl\dosyayonetim\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\dosyayonetim\models\Dosyayonetim;

/**
 * DosyayonetimSearch represents the model behind the search form of `vendor\kouosl\dosyayonetim\models\Dosyayonetim`.
 */
class DosyayonetimSearch extends Dosyayonetim
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dosya_id'], 'integer'],
            [['dosya_adi', 'dosya_yolu'], 'safe'],
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
        $query = Dosyayonetim::find();

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
            'dosya_id' => $this->dosya_id,
        ]);

        $query->andFilterWhere(['like', 'dosya_adi', $this->dosya_adi])
            ->andFilterWhere(['like', 'dosya_yolu', $this->dosya_yolu]);

        return $dataProvider;
    }
}
