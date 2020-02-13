<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper("url");
        $this->load->helper('form');
        $this->load->model('admin/AdminModel');
    }

    function secure_login() {
        $this->load->view('admin/secure_login');
    }

    function secure_login_validation() {
        $this->load->library('form_validation');
        $formdata = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/secure_login');
        } else {
            $row = $this->AdminModel->checkAdmin($formdata);
            if($row > 0){
                $this->load->view('admin/admin_dashboard');
            }
        }
    }

}
