<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WebsiteModel extends CI_Model
{
    function login($username, $password)
    {
        $query = $this->db->query("SELECT * FROM user WHERE username = '$username' AND password = '$password'")->row();

        return $query;
    }

    function logged_id()
    {
        return $this->session->userdata('id');
    }

    function get_isi()
    {
        $query = $this->db->query("SELECT * FROM guestbook ORDER BY id DESC")->result();

        return $query;
    }

    function get_visitor($id)
    {
        $query = $this->db->query("SELECT * FROM guestbook WHERE id = '$id'");
        
        return $query->row();
    }
}
