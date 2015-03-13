<?php

namespace kkruger\articles\models;

use Yii;

/**
 * This is the model class for table "article_category".
 *
 * @property integer $article_cat_id
 * @property integer $article_cat_parent_id
 * @property integer $article_cat_sort
 * @property boolean $article_cat_status
 * @property string $article_cat_name
 *
 * @property ArticleContent[] $articleContents
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_cat_parent_id', 'article_cat_sort'], 'integer'],
            [['article_cat_status'], 'boolean'],
            [['article_cat_name'], 'required'],
            [['article_cat_name'], 'string', 'max' => 48]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'article_cat_id' => Yii::t('app', 'Article Cat ID'),
            'article_cat_parent_id' => Yii::t('app', 'Article Cat Parent ID'),
            'article_cat_sort' => Yii::t('app', 'Article Cat Sort'),
            'article_cat_status' => Yii::t('app', 'Article Cat Status'),
            'article_cat_name' => Yii::t('app', 'Article Cat Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticleContents()
    {
        return $this->hasMany(ArticleContent::className(), ['article_cat_id' => 'article_cat_id']);
    }
}
