<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Auth_model', 'Auth');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $this->load->view('auth/index');
  }

  public function login()
  {
    $this->load->model('Auth_model', 'auth');

    $this->form_validation->set_rules('username', 'Username', 'required|trim');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->index();
    } else {
      $data['login'] = $this->auth->getLogin();
      $data['user'] = $this->auth->getUser($data['login']['username']);


      if ($data['user'] && $data['user']['password'] == $data['login']['password']) {
        echo 'login berhasil';
      } else {
        echo 'login gagal';
      }
    }
  }
}
