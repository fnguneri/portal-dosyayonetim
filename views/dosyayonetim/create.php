<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\dosyayonetim\models\Dosyayonetim */

$this->title = 'Sekaks';
$this->params['breadcrumbs'][] = ['label' => 'Dosyayonetims', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dosyayonetim-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>