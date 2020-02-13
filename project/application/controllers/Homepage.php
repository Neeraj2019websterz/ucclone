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

    public function signup()
    {

        $this->load->view('/frontend/userlogin');
       
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
        $address2 = $this->input->post('address2');
        $city = $this->input->post('city');
        $state = $this->input->post('state');
        $country = $this->input->post('country');
        $formdata = [
        "first_name" => $firstname,
        "last_name" => $lastname,
        "email" => $email,
        "age" => $DateOfBirth,
        "contact" => $phoneNo,
        "password" => $pasword,
        "street_add1" => $address1,
        "street_add2" => $address2,
        "city" => $city,
        "state" => $state,
        "country" => $country
        ];
        //$res = $this->User->insertUserData($formdata);
        
        return print_r($formdata);

    }

    public function test()
    {
        $this->load->view('/frontend/test');
    }

}
