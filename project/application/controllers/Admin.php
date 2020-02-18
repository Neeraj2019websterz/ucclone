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
            if ($row > 0) {
                $this->load->view('admin/admin_dashboard');
            } else {
                $this->session->set_flashdata('error', 'Your Account is Invalid');
                redirect('admin/secure_login', 'refresh');
            }
        }
    }
    function admin_dashboard() {
        $this->load->view('admin/admin_dashboard');        
    }

    function services_group() {
        $data['resp']= null;
        $data['error']= null;
        $data['row'] =  $this->AdminModel->getServicesList();
       // echo '<pre>';print_r($data);die;
        $this->load->view('admin/service_group',$data);
    }

    function add_service_group_view() {
         $data['resp']= null;
        $this->load->view('admin/addservicegroup',$data);
    }

    function add_service_group() {

        $formdata = array(
            'services_group' => $this->input->post('serviceGroupName'),
            'status' => '0'
        );
        $row = $this->AdminModel->addservicegroup($formdata);
        if ($row['status']) {
            $data['resp'] = $row['message'];
            
            $this->load->view('admin/service_group', $data);
        } else {
            $data['resp'] = $row['message'];
            $this->load->view('admin/createservgrp', $data);
        }        
    }

}
