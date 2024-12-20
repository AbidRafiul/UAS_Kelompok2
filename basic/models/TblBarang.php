<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_barang".
 *
 * @property int $id_barang
 * @property string $nama_barang
 * @property string $merk_barang
 * @property int $stok_barang
 * @property string $harga_barang
 * @property int $tbl_pemasok_id_pemasok
 *
 * @property TblPemasok $tblPemasokIdPemasok
 * @property TblKaryawan[] $tblKaryawans
 */
class TblBarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_barang', 'nama_barang', 'merk_barang', 'stok_barang', 'harga_barang', 'tbl_pemasok_id_pemasok'], 'required'],
            [['id_barang', 'stok_barang', 'tbl_pemasok_id_pemasok'], 'integer'],
            [['nama_barang', 'merk_barang', 'harga_barang'], 'string', 'max' => 45],
            [['id_barang'], 'unique'],
            [['tbl_pemasok_id_pemasok'], 'exist', 'skipOnError' => true, 'targetClass' => TblPemasok::className(), 'targetAttribute' => ['tbl_pemasok_id_pemasok' => 'id_pemasok']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_barang' => 'Id Barang',
            'nama_barang' => 'Nama Barang',
            'merk_barang' => 'Merk Barang',
            'stok_barang' => 'Stok Barang',
            'harga_barang' => 'Harga Barang',
            'tbl_pemasok_id_pemasok' => 'Tbl Pemasok Id Pemasok',
        ];
    }

    /**
     * Gets query for [[TblPemasokIdPemasok]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblPemasokIdPemasok()
    {
        return $this->hasOne(TblPemasok::className(), ['id_pemasok' => 'tbl_pemasok_id_pemasok']);
    }

    /**
     * Gets query for [[TblKaryawans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblKaryawans()
    {
        return $this->hasMany(TblKaryawan::className(), ['tbl_barang_id_barang' => 'id_barang']);
    }
}
