<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("User");
    }

    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function Login()
    {

        $this->load->view('/frontend/userlogin');
        $this->User->getUserData();
    }

    public function userformdata()
    {
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $DateOfBirth = $this->input->post('Dateofbirth');
        $phoneNo = $this->input->post('phoneno');
        $pasword = $this->input->post('confrimpassword');
        $address1 = $this->input->post('address1');
        $city = $this->input->post('city');

    }

    public function test()
    {
        $this->load->view('/frontend/test');
    }

}
