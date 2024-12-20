<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TblKaryawanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Karyawans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-karyawan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Karyawan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_karyawan',
            'nama_karyawan',
            'alamat_karyawan',
            'kontak_karyawan',
            'tbl_barang_id_barang',
            //'tbl_pembelian_id_pembelian',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
