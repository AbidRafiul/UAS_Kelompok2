<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblKaryawanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-karyawan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_karyawan') ?>

    <?= $form->field($model, 'nama_karyawan') ?>

    <?= $form->field($model, 'alamat_karyawan') ?>

    <?= $form->field($model, 'kontak_karyawan') ?>

    <?= $form->field($model, 'tbl_barang_id_barang') ?>

    <?php // echo $form->field($model, 'tbl_pembelian_id_pembelian') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
