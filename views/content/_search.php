<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\contentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="content-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'article_id') ?>

    <?= $form->field($model, 'article_cat_id') ?>

    <?= $form->field($model, 'article_status') ?>

    <?= $form->field($model, 'article_sort') ?>

    <?= $form->field($model, 'article_title') ?>

    <?php // echo $form->field($model, 'article_slug') ?>

    <?php // echo $form->field($model, 'article_content') ?>

    <?php // echo $form->field($model, 'article_create_date') ?>

    <?php // echo $form->field($model, 'article_create_by_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
