<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_karyawan".
 *
 * @property int $id_karyawan
 * @property string $nama_karyawan
 * @property string $alamat_karyawan
 * @property int $kontak_karyawan
 * @property int $tbl_barang_id_barang
 * @property int $tbl_pembelian_id_pembelian
 *
 * @property TblBarang $tblBarangIdBarang
 * @property TblPembelian $tblPembelianIdPembelian
 */
class TblKaryawan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_karyawan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_karyawan', 'nama_karyawan', 'alamat_karyawan', 'kontak_karyawan', 'tbl_barang_id_barang', 'tbl_pembelian_id_pembelian'], 'required'],
            [['id_karyawan', 'kontak_karyawan', 'tbl_barang_id_barang', 'tbl_pembelian_id_pembelian'], 'integer'],
            [['nama_karyawan', 'alamat_karyawan'], 'string', 'max' => 45],
            [['id_karyawan'], 'unique'],
            [['tbl_barang_id_barang'], 'exist', 'skipOnError' => true, 'targetClass' => TblBarang::className(), 'targetAttribute' => ['tbl_barang_id_barang' => 'id_barang']],
            [['tbl_pembelian_id_pembelian'], 'exist', 'skipOnError' => true, 'targetClass' => TblPembelian::className(), 'targetAttribute' => ['tbl_pembelian_id_pembelian' => 'id_pembelian']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_karyawan' => 'Id Karyawan',
            'nama_karyawan' => 'Nama Karyawan',
            'alamat_karyawan' => 'Alamat Karyawan',
            'kontak_karyawan' => 'Kontak Karyawan',
            'tbl_barang_id_barang' => 'Tbl Barang Id Barang',
            'tbl_pembelian_id_pembelian' => 'Tbl Pembelian Id Pembelian',
        ];
    }

    /**
     * Gets query for [[TblBarangIdBarang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblBarangIdBarang()
    {
        return $this->hasOne(TblBarang::className(), ['id_barang' => 'tbl_barang_id_barang']);
    }

    /**
     * Gets query for [[TblPembelianIdPembelian]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblPembelianIdPembelian()
    {
        return $this->hasOne(TblPembelian::className(), ['id_pembelian' => 'tbl_pembelian_id_pembelian']);
    }
}
