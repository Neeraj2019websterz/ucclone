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
        $this->load->model("Profilepicmodel");
        $this->load->model("Services");
        $this->load->model("City");
        $this->load->model("State");
        $this->load->helper("form");
        $this->load->library('session');
    }

    public function Professionalslogin()
    {
        $this->load->view('/frontend/Professionalslogin');
        $this->load->library('form_validation');
        $formdata = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $row = $this->Professionalsmodel->getProfessionalLogindata($formdata);
        if ($this->form_validation->run() == FALSE) {

        } else {
            $row = $this->Professionalsmodel->getProfessionalLogindata($formdata);

            if ($row > 0) {
                print_r($row);
                $this->session->set_userdata('email', $formdata['email']);
                redirect('/Professionals/professionalsDashborad', 'refresh');
            } else {
                $this->session->set_flashdata('error', 'Your Account is Invalid');
            }
        }
    }

    public function Professionalssignup()
    {
        // $this->load->view('/frontend/Vendersignup');
        $getservicescatagery = $this->Services->getservicescatagery();
        $city = $this->City->getCity();
        $state = $this->State->getState();
        $data['services'] = $getservicescatagery;
        $data['city'] = $city;
        $data['state'] = $state;
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
            "services_list_id" => $services,
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
        $email = $this->session->userdata('email');

        $res = $this->Professionalsmodel->getProfessionalUserDetails($email);
//          print_r($res);
        $data['res'] = $res;
        $data['imgpath'] = PROFESIONAL_PROFILE_PIC_PATH;
        $this->load->view('/frontend/professionalsdashborad', $data);
    }

    public function professionalsProfile()
    {
        $email = $this->session->userdata('email');
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['upload_path'] = FCPATH . 'assets\profilepic\professional';
        $config['encrypt_name'] = true;
        $config['width'] = 313;
        $config['height'] = 170;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('profilepic')) {
            $this->session->set_flashdata('message', ' ');
        } else {

            $picName = $this->upload->data();
            print_r($picName['file_name']);
            $this->Profilepicmodel->profilePicProfessionalUpload($email, $picName['file_name']);


            $this->session->set_flashdata('message', 'Profile Picture Uploaded Successfully');
        }

        redirect(site_url('professionals/professionalsdashborad'), 'refresh');
    }

    public function updateProfessionalProfileForm()
    {
        $email = $this->session->userdata('email');
        $city = $this->City->getCity();
        $state = $this->State->getState();
        $res = $this->Professionalsmodel->getProfessionalUserDetails($email);
        $getservicescatagery = $this->Services->getservicescatagery();
        $data['res'] = $res;
        $data['services'] = $getservicescatagery;
        $data['city'] = $city;
        $data['state'] = $state;
        $email = $this->session->userdata('email');
        $this->load->view('frontend/Professionalsupdateform', $data);
    }

    public function updateProfileData()
    {
        $emails = $this->session->userdata('email');
        $firstname = $this->input->post('nameproffesional');
        $phoneNo = $this->input->post('phoneproffessional');
        $address1 = $this->input->post('address1proffesional');
        $address2 = $this->input->post('address2proffesional');
        $city = $this->input->post('cityproffesional');
        $services = $this->input->post('servicesproffesional');
        $state = $this->input->post('stateproffesional');
        $country = $this->input->post('countryproffesional');
        $gender = $this->input->post('genderproffesional');
        $formdata = [
            "first_name" => $firstname,
            "contact" => $phoneNo,
            "street_add1" => $address1,
            "street_add2" => $address2,
            "services_list_id" => $services,
            "city" => $city,
            "state" => $state,
            "country" => $country,
            "gender" => $gender
        ];
        $query = $this->Professionalsmodel->updateProfessionalUserDetails($emails, $formdata);
        print_r($query);
        if ($query == 1) {
            redirect('professionals/professionalsdashborad', 'refresh');
        }
    }

    public function servicesproffesional()
    {
        $this->Services->test();
    }

}
