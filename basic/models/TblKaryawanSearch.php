<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblKaryawan;

/**
 * TblKaryawanSearch represents the model behind the search form of `app\models\TblKaryawan`.
 */
class TblKaryawanSearch extends TblKaryawan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_karyawan', 'kontak_karyawan', 'tbl_barang_id_barang', 'tbl_pembelian_id_pembelian'], 'integer'],
            [['nama_karyawan', 'alamat_karyawan'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TblKaryawan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_karyawan' => $this->id_karyawan,
            'kontak_karyawan' => $this->kontak_karyawan,
            'tbl_barang_id_barang' => $this->tbl_barang_id_barang,
            'tbl_pembelian_id_pembelian' => $this->tbl_pembelian_id_pembelian,
        ]);

        $query->andFilterWhere(['like', 'nama_karyawan', $this->nama_karyawan])
            ->andFilterWhere(['like', 'alamat_karyawan', $this->alamat_karyawan]);

        return $dataProvider;
    }
}
