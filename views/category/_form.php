<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'article_cat_parent_id')->textInput() ?>

    <?= $form->field($model, 'article_cat_sort')->textInput() ?>

    <?= $form->field($model, 'article_cat_status')->checkbox() ?>

    <?= $form->field($model, 'article_cat_name')->textInput(['maxlength' => 48]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
