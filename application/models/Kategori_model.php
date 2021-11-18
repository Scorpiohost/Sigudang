<?php

class Kategori_model extends CI_Model
{
    private $table      = 'kategori';
    public  $id         = '';
    public  $kategori   = '';

    public function rules()
    {
        return [
            [
                'field' => 'kategori',
                'label' => 'kategori',
                'rules' => 'required'
            ],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }

    public function getById($id)
    {
        $this->db->where('id', $id);
        return $this->db->get($this->table)->row();
    }

    public function count()
    {
        return $this->db->count_all_results($this->table); 
    }

    public function insert()
    {
        $data = ['kategori' => $this->kategori];
        return $this->db->insert($this->table, $data);
    }

    public function update()
    {
        $data = ['kategori' => $this->kategori];
        $this->db->where('id', $this->id);
        return $this->db->update($this->table, $data);
    }

    public function delete()
    {
        return $this->db->delete($this->table, ['id' => $this->id]);
    }

}
