<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_pemasok".
 *
 * @property int $id_pemasok
 * @property string $nama_pemasok
 * @property string $alamat_pemasok
 * @property int $kontak_pemasok
 *
 * @property TblBarang[] $tblBarangs
 */
class TblPemasok extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_pemasok';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pemasok', 'nama_pemasok', 'alamat_pemasok', 'kontak_pemasok'], 'required'],
            [['id_pemasok', 'kontak_pemasok'], 'integer'],
            [['nama_pemasok', 'alamat_pemasok'], 'string', 'max' => 45],
            [['id_pemasok'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pemasok' => 'Id Pemasok',
            'nama_pemasok' => 'Nama Pemasok',
            'alamat_pemasok' => 'Alamat Pemasok',
            'kontak_pemasok' => 'Kontak Pemasok',
        ];
    }

    /**
     * Gets query for [[TblBarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblBarangs()
    {
        return $this->hasMany(TblBarang::className(), ['tbl_pemasok_id_pemasok' => 'id_pemasok']);
    }
}
