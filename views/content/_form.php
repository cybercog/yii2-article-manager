<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Content */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="content-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'article_cat_id')->textInput() ?>

    <?= $form->field($model, 'article_status')->textInput() ?>

    <?= $form->field($model, 'article_sort')->textInput() ?>

    <?= $form->field($model, 'article_title')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'article_slug')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'article_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'article_create_date')->textInput() ?>

    <?= $form->field($model, 'article_create_by_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
