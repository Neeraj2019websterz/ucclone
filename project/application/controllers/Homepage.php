<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("User");
        $this->load->model("Services");
    }

    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function signup()
    {

        $this->load->view('/frontend/usersignup');
    }

    public function userlogin()
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
        $gender = $this->input->post('gender');
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
            "country" => $country,
            "gender" => $gender
        ];
        $res = $this->User->insertUserData($formdata);

        return print_r($formdata);
    }

    function secure_login_validation()
    {
        $this->load->library('form_validation');
        $formdata = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            
        } else {
            $row = $this->User->getUserlogindata($formdata);
            
            if ($row > 0) {
                $getservicesgroup = $this->Services->getservicesgroup();
                $getservicescatagery = $this->Services->getservicescatagery();
                $data['getservicesgroup'] = $getservicesgroup;
                $data['getservicescatagery'] = $getservicescatagery;
                $this->load->view('/frontend/Userservices', $data);
            } else {
                $this->session->set_flashdata('error', 'Your Account is Invalid');

                redirect('login', 'refresh');
            }
        }
    }

    public function test()
    {
        $getservicesgroup = $this->Services->getservicesgroup();
        $getservicescatagery = $this->Services->getservicescatagery();
        $data['getservicesgroup'] = $getservicesgroup;
        $data['getservicescatagery'] = $getservicescatagery;
        $this->load->view('/frontend/test', $data);
    }
   public function Subservices($id)
    {
       $res=$this->Services->getServicesList($id);
        $data['res'] = $res;
        $this->load->view('/frontend/test', $data);
       
    }
  
}