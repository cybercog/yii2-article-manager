<?php

namespace kkruger\articles\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kkruger\articles\models\Content;

/**
 * contentSearch represents the model behind the search form about `app\models\Content`.
 */
class contentSearch extends Content
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_id', 'article_cat_id', 'article_status', 'article_sort', 'article_create_by_id'], 'integer'],
            [['article_title', 'article_slug', 'article_content', 'article_create_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Content::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'article_id' => $this->article_id,
            'article_cat_id' => $this->article_cat_id,
            'article_status' => $this->article_status,
            'article_sort' => $this->article_sort,
            'article_create_date' => $this->article_create_date,
            'article_create_by_id' => $this->article_create_by_id,
        ]);

        $query->andFilterWhere(['like', 'article_title', $this->article_title])
            ->andFilterWhere(['like', 'article_slug', $this->article_slug])
            ->andFilterWhere(['like', 'article_content', $this->article_content]);

        return $dataProvider;
    }
}
