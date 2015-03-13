<?php

namespace kkruger\articles\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kkruger\articles\models\Category;

/**
 * categorySearch represents the model behind the search form about `app\models\Category`.
 */
class categorySearch extends Category
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_cat_id', 'article_cat_parent_id', 'article_cat_sort'], 'integer'],
            [['article_cat_status'], 'boolean'],
            [['article_cat_name'], 'safe'],
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
        $query = Category::find();

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
            'article_cat_id' => $this->article_cat_id,
            'article_cat_parent_id' => $this->article_cat_parent_id,
            'article_cat_sort' => $this->article_cat_sort,
            'article_cat_status' => $this->article_cat_status,
        ]);

        $query->andFilterWhere(['like', 'article_cat_name', $this->article_cat_name]);

        return $dataProvider;
    }
}
