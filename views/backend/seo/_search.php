<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SeoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'admin_id') ?>

    <?= $form->field($model, 'meta_description') ?>

    <?= $form->field($model, 'meta_title') ?>

    <?= $form->field($model, 'meta_keywords') ?>

    <?= $form->field($model, 'dil') ?>

    <?php // echo $form->field($model, 'cononical_url') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
