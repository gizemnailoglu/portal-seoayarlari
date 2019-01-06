<?php

namespace kouosl\seoayarlari\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\seoayarlari\models\Seo;

/**
 * SeoSearch represents the model behind the search form of `backend\models\Seo`.
 */
class SeoSearch extends Seo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['admin_id'], 'integer'],
            [['meta_description', 'meta_title', 'meta_keywords', 'dil', 'cononical_url'], 'safe'],
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
        $query = Seo::find();

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
            'admin_id' => $this->admin_id,
        ]);

        $query->andFilterWhere(['like', 'meta_description', $this->meta_description])
            ->andFilterWhere(['like', 'meta_title', $this->meta_title])
            ->andFilterWhere(['like', 'meta_keywords', $this->meta_keywords])
            ->andFilterWhere(['like', 'dil', $this->dil])
            ->andFilterWhere(['like', 'cononical_url', $this->cononical_url]);

        return $dataProvider;
    }
}
