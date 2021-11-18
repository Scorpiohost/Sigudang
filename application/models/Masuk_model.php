<?php

class Masuk_model extends CI_Model
{
    private $table          = 'barang_masuk';
    public $kd_transaksi    = '';
    public $kd_barang       = '';
    public $stok_masuk      = '';
    public $tanggal         = '';

    public function rules()
    {
        return [
            [
                'field' => 'kode',
                'label' => 'kode',
                'rules' => 'required'
            ],

            [
                'field' => 'barang',
                'label' => 'barang',
                'rules' => 'required'
            ],

            [
                'field' => 'stok',
                'label' => 'stok',
                'rules' => 'required'
            ],

            [
                'field' => 'date',
                'label' => 'date',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        $this->db->join('barang', 'barang_masuk.kd_barang = barang.kd_barang');
        return $this->db->get($this->table)->result();
    }

    public function getById($id)
    {
        $this->db->where('kd_transaksi', $id);
        return $this->db->get($this->table)->row();
    }

    public function insert()
    {
        $data = [
            'kd_transaksi'  => $this->kd_transaksi,
            'kd_barang'     => $this->kd_barang,
            'stok_masuk'    => $this->stok_masuk,
            'tanggal'       => $this->tanggal
        ];
        return $this->db->insert($this->table, $data);
    }

    public function update()
    {
        $data = [
            'kd_transaksi'  => $this->kd_transaksi,
            'kd_barang'     => $this->kd_barang,
            'stok_masuk'    => $this->stok_masuk,
            'tanggal'       => $this->tanggal
        ];
        $this->db->where('kd_transaksi', $this->kd_transaksi);
        return $this->db->update($this->table, $data);
    }
}
