<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\dosyayonetim\models\Dosyayonetim */

$this->title = 'Update Dosyayonetim: ' . $model->dosya_id;
$this->params['breadcrumbs'][] = ['label' => 'BASDB', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dosya_id, 'url' => ['view', 'id' => $model->dosya_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dosyayonetim-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>