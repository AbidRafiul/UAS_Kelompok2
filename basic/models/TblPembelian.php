<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_pembelian".
 *
 * @property int $id_pembelian
 * @property string $tgl_pembelian
 * @property string $total_pembelian
 *
 * @property TblKaryawan[] $tblKaryawans
 */
class TblPembelian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_pembelian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pembelian', 'tgl_pembelian', 'total_pembelian'], 'required'],
            [['id_pembelian'], 'integer'],
            [['tgl_pembelian'], 'safe'],
            [['total_pembelian'], 'string', 'max' => 45],
            [['id_pembelian'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pembelian' => 'Id Pembelian',
            'tgl_pembelian' => 'Tgl Pembelian',
            'total_pembelian' => 'Total Pembelian',
        ];
    }

    /**
     * Gets query for [[TblKaryawans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblKaryawans()
    {
        return $this->hasMany(TblKaryawan::className(), ['tbl_pembelian_id_pembelian' => 'id_pembelian']);
    }
}
