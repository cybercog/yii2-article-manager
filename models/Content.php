<?php

namespace kkruger\articles\models;

use Yii;

/**
 * This is the model class for table "article_content".
 *
 * @property integer $article_id
 * @property integer $article_cat_id
 * @property integer $article_status
 * @property integer $article_sort
 * @property string $article_title
 * @property string $article_slug
 * @property string $article_content
 * @property string $article_create_date
 * @property integer $article_create_by_id
 *
 * @property ArticleCategory $articleCat
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_cat_id', 'article_status', 'article_title', 'article_slug', 'article_content', 'article_create_by_id'], 'required'],
            [['article_cat_id', 'article_status', 'article_sort', 'article_create_by_id'], 'integer'],
            [['article_content'], 'string'],
            [['article_create_date'], 'safe'],
            [['article_title', 'article_slug'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'article_id' => Yii::t('app', 'Article ID'),
            'article_cat_id' => Yii::t('app', 'Article Cat ID'),
            'article_status' => Yii::t('app', 'Article Status'),
            'article_sort' => Yii::t('app', 'Article Sort'),
            'article_title' => Yii::t('app', 'Article Title'),
            'article_slug' => Yii::t('app', 'Article Slug'),
            'article_content' => Yii::t('app', 'Article Content'),
            'article_create_date' => Yii::t('app', 'Article Create Date'),
            'article_create_by_id' => Yii::t('app', 'Article Create By ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticleCat()
    {
        return $this->hasOne(ArticleCategory::className(), ['article_cat_id' => 'article_cat_id']);
    }
}
