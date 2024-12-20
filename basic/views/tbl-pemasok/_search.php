<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblPemasokSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-pemasok-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_pemasok') ?>

    <?= $form->field($model, 'nama_pemasok') ?>

    <?= $form->field($model, 'alamat_pemasok') ?>

    <?= $form->field($model, 'kontak_pemasok') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
