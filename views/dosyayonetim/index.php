<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\dosyayonetim\models\DosyayonetimSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dosyayonetims';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dosyayonetim-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('askkdlklksl', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'dosya_id',
            'dosya_adi',
            'dosya_yolu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>