<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Content */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Content',
]) . ' ' . $model->article_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contents'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->article_id, 'url' => ['view', 'id' => $model->article_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="content-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
