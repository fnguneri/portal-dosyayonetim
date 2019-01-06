<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\dosyayonetim\models\Dosyayonetim */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dosyayonetim-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dosya_adi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dosya_yolu')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>