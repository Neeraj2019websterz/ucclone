<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Professionals extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("User");
        $this->load->model("Professionalsmodel");
        $this->load->model("Services");
        $this->load->helper("form");
    }

    public function Professionalslogin()
    {
        $this->load->view('/frontend/Professionalslogin');
    }

    public function Professionalssignup()
    {
        // $this->load->view('/frontend/Vendersignup');
        $getservicescatagery = $this->Services->getservicescatagery();
        $data['services'] = $getservicescatagery;
        $this->load->view('/frontend/Professionalssignup', $data);
    }

    public function getFormDataProfessional()
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
        $services = $this->input->post('services');
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
            "services_list_id"=> $services,
            "city" => $city,
            "state" => $state,
            "country" => $country,
            "gender" => $gender
        ];
      $res = $this->Professionalsmodel->professionalsInsertFromData($formdata);
        echo $res;
        //       echo "heelo";
    }
public function professionalsDashborad()
{
        $this->load->view('/frontend/professionalsdashborad');

}

}
