<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Seo */

$this->title = 'Update Seo: ' . $model->admin_id;
$this->params['breadcrumbs'][] = ['label' => 'Seos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->admin_id, 'url' => ['view', 'id' => $model->admin_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="seo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
