<?defined('BASEPATH') OR exit('no direct script alllowed');

class User extends CI_Controller
{
  public function __construct() {
    parent::__construct();
    $this->load->model('User_model');
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
  }

  public function login() {
    if ($this->input->post()) {
      $this->form_validation->set_rules('username', '用户名','required');
      $this->form_validation->set_rules('password', '密码', 'required');
      $this->form_validation->run();
    }
    $this->load->view('user/login');
  }

  public function dologin() {

    var_dump($this->form_validation->run());
    die;
    if ($this->form_validation->run() == FALSE) {
      // redirect('User/login');
      $this->load->view('user/login');
    }
    $verify = $this->User_model->verifyPassword($_POST);
    if ($verify) {
      redirect('/');
    }
    redirect('User/login');
  }

  public function register() {
    $this->load->view('user/register');
  }

  public function storeUser() {
    $res = $this->User_model->addUser($_POST);
    if ($res) {
      redirect('/');
    }
    redirect('User/register');
  }

  public function logout() {
  }
}
