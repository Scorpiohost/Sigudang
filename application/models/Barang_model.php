<?php

class Barang_model extends CI_Model
{
    private $table      = 'barang';
    public $kd_barang   = '';
    public $nama        = '';
    public $id_kategori = '';
    public $stok        = '';

    public function rules()
    {
        return [
            [
                'field' => 'kode',
                'label' => 'kode',
                'rules' => 'required'
            ],

            [
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required'
            ],

            [
                'field' => 'kategori',
                'label' => 'kategori',
                'rules' => 'required'
            ],

            [
                'field' => 'stok',
                'label' => 'stok',
                'rules' => 'required'
            ],
        ];
    }

    public function getAll()
    {
        $this->db->join('kategori', 'barang.id_kategori = kategori.id');
        return $this->db->get($this->table)->result();
    }

    public function getById($id)
    {
        $this->db->where('kd_barang', $id);
        return $this->db->get($this->table)->row();
    }

    public function count()
    {
        return $this->db->count_all_results($this->table); 
    }

    public function insert()
    {
        $data = [
            'kd_barang'   => $this->kd_barang,
            'nama'        => $this->nama,
            'id_kategori' => $this->id_kategori,
            'stok'        => $this->stok
        ];
        return $this->db->insert($this->table, $data);
    }

    public function update()
    {
        $data = [
            'kd_barang'   => $this->kd_barang,
            'nama'        => $this->nama,
            'id_kategori' => $this->id_kategori,
            'stok'        => $this->stok
        ];
        $this->db->where('kd_barang', $this->kd_barang);
        return $this->db->update($this->table, $data);
    }

    public function delete()
    {
        $sql = "DELETE b 
        FROM barang AS b 
        JOIN kategori AS k ON b.id_kategori = k.id 
        WHERE b.kd_barang = ?";
        return $this->db->query($sql, array($this->kd_barang));
    }
}
