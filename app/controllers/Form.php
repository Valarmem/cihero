<?php

class Form extends CI_Controller {

    public function index()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        // $this->form_validation->set_rules('username', '用户名', 'required');
        // $this->form_validation->set_rules('password', '密码', 'required',
        //     array('required' => 'You must provide a %s.')
        // );
        // $this->form_validation->set_rules('passconf', '再次输入密码', 'required');
        // $this->form_validation->set_rules('email', '电子邮箱', 'required');

        /*$config = array(
            array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),
            ),
            array(
                'field' => 'passconf',
                'label' => 'Password Confirmation',
                'rules' => 'required'
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);*/

        $this->form_validation->set_rules(
    'username', '用户名',
    'required|min_length[5]|max_length[12]|is_unique[users.username]',
    array(
        'required'  => ' 请填写%s！',
        'is_unique' => '%s 已存在！'
    )
);
$this->form_validation->set_rules('password', 'Password', 'required');
$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('form/myform');
        }
        else
        {
            $this->load->view('form/formsuccess');
        }
    }
}