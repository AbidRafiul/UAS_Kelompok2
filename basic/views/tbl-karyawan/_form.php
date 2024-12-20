<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblKaryawan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-karyawan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_karyawan')->textInput() ?>

    <?= $form->field($model, 'nama_karyawan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_karyawan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kontak_karyawan')->textInput() ?>

    <?= $form->field($model, 'tbl_barang_id_barang')->textInput() ?>

    <?= $form->field($model, 'tbl_pembelian_id_pembelian')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
