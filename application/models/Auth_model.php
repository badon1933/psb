<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
  public function getLogin()
  {
    $data = [
      'username' => $this->input->post('username', true),
      'password' => $this->input->post('password', true)
    ];

    return $data;
  }

  public function getUser($username)
  {
    $user = $this->db->get_where('user', ['username' => $username])->row_array();

    return $user;
  }
}
