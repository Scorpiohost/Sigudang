<?php

class Pengguna_model extends CI_Model
{

    private   $table     = 'user';
    public    $id        = '';
    public    $username  = '';
    public    $password  = '';

    public function rules()
    {
        return [
            [
                'field' => 'username',
                'label' => 'username',
                'rules' => 'required'
            ],

            [
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }

    public function count()
    {
        return $this->db->count_all_results($this->table); 
    }

    public function insert()
    {
        $data = [
            'username' => $this->username,
            'password' => password_hash($this->password, PASSWORD_BCRYPT)
        ];

        return $this->db->insert($this->table, $data);
    }

    public function delete()
    {
        return $this->db->delete($this->table, ['id' => $this->id]);
    }
    
}
