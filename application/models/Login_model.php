<?php

class Login_model extends CI_Model
{

    private   $table     = 'user';
    public    $id        = '';
    public    $username  = '';
    public    $password  = '';

    public function verifyaccount()
    {
        $this->db->where('username', $this->username);
        $username = $this->db->get($this->table)->row();
        if ($username) {
            $password = password_verify($this->password, $username->password);
            if ($password) {
                $session_login = [
                    'username'  => $username,
                ];
                $this->session->set_userdata($session_login);
                return true;
            } else {
                return false;
            }
        }
    }

    public function destroy() {
        return $this->session->sess_destroy();
    }
}
