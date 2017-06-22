<?php
defined('BASEPATH')or exit('no direct script allowed');
class User_model extends CI_Model
{
  private $user;
  public function __construct() {
    parent::__construct();
    $this->load->database();
    $this->User = $this->load->database('user',TRUE);
  }

  public function verifyPassword($identify) {
    $username = $identify['username'];
    $this->User->select('password');
    $this->User->from('user');
    $this->User->where('username',$username)->or_where('email',$username)->or_where('mobile',$username);
    $hashArr = $this->User->get()->row_array();
    $res = password_verify($identify['password'],$hashArr['password']);
    return $res;
  }

  public function addUser($user) {
    $info = [
      'username' => trim($user['username']),
      'email'    => trim($user['email']),
      'mobile'   => trim($user['mobile']),
      'password' => password_hash(trim($user['password']),PASSWORD_BCRYPT),
    ];
    return $this->User->insert('user',$info);
  }
}
 ?>
