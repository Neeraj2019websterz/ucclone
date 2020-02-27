<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->helper('form');
        $this->load->model('admin/AdminModel');
        $this->load->model('admin/Image');
        $this->load->library('session');
        $this->load->model('Services');
    }

    function secure_login()
    {
        $this->load->view('admin/secure_login');
    }

    function secure_login_validation()
    {
        $this->load->library('form_validation');
        $formdata = array(
            'email' => htmlspecialchars($this->input->post('email')),
            'password' => htmlspecialchars($this->input->post('password'))
        );
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/secure_login');
        } else {
            $row = $this->AdminModel->checkAdmin($formdata);
            if ($row > 0) {
                $this->session->set_userdata(array('user' => $formdata['email']));
                $this->load->view('admin/admin_dashboard');
            } else {
                $this->session->set_flashdata('error', 'Your Account is Invalid');
                redirect('admin/secure_login', 'refresh');
            }
        }
    }

    function admin_dashboard()
    {
        $data['row'] = $this->AdminModel->getAllUsers();
        
        $this->load->view('admin/admin_dashboard');
    }

    function services_group()
    {
        $data['resp'] = null;
        $data['error'] = null;
        $data['row'] = $this->AdminModel->getServicesList();
//        
//        echo "<pre>";
//        print_r($data); die;
        $this->load->view('admin/service_group', $data);
    }

    function add_service_group_view()
    {
        $data['resp'] = null;
        $this->load->view('admin/addservicegroup', $data);
    }

    function add_service_group()
    {

        $formdata = array(
            'services_group' => $this->input->post('serviceGroupName'),
            'status' => '0'
        );
        $row = $this->AdminModel->addServiceGroup($formdata);
        if ($row['status']) {
            $data['resp'] = $row['message'];

            $this->load->view('admin/service_group', $data);
        } else {
            $data['resp'] = $row['message'];
            $this->load->view('admin/addservicegroup', $data);
        }
    }

    function add_service_category_view()
    {
        $data['resp'] = null;

        $data['service_group'] = $this->Services->getservicesgroup();
        $this->load->view('admin/addservicecategory', $data);
    }

    function add_service_category()
    {

        $formdata = array(
            'services_group_id' => $this->input->post('servicegrp'),
            'services_categery_list' => $this->input->post('servicecatname'),
        );

        $row = $this->AdminModel->addServiceCategory($formdata);
        if ($row['status']) {
            $data['resp'] = $row['message'];
            redirect('admin/service');
        } else {
            $data['resp'] = $row['message'];
            $this->load->model('Services');
            $data['service_group'] = $this->Services->getservicesgroup();
            $this->load->view('admin/addservicecategory', $data);
        }
    }

    function load_subservices_view()
    {
        $data['service_list'] = $this->AdminModel->getSubServicesList();
//        echo '<pre>';
//        print_r($data['service_list']);die;
        $this->load->view('admin/subservices', $data);
    }

    function add_sub_service_view()
    {
        $data['resp'] = null;
        $this->load->model('Services');
        $data['service_category'] = $this->Services->getservicescatagery();
        
        $this->load->view('admin/createsubservice', $data);
    }

    function add_sub_service()
    {
        $formdata = array(
            'services_list' => $this->input->post('servicename'),
            'services_catagery_id' => $this->input->post('servicecategory'),
            'service_fee' => $this->input->post('servicefee'),
            'convenience_fee' => $this->input->post('conveniencefee')
        );

        $row = $this->AdminModel->addService($formdata);
        print_r($row);
        if ($row['status']) {
            $data['resp'] = $row['message'];
            redirect('admin/subservices');
        } else {
            echo $data['resp'] = $row['message'];
            $this->load->model('Services');
            $data['service_category'] = $this->Services->getservicescatagery();
            $this->load->view('admin/createsubservice', $data);
        }
    }

    function logout()
    {
        $this->session->unset_userdata('user');
        $this->session->sess_destroy();
        redirect("admin/secure_login");
    }

    function edit_groupname($groupid)
    {
        $gid = $groupid;
        $formdata = array(
            'services_group' => $this->input->post('updatedServName'),
        );
        $resp = $this->AdminModel->serviceGroupNameUpdate($gid, $formdata);

        if ($resp['status']) {

            redirect('admin/service');
        } else {
            echo $data['error'] = $resp['message'];
            redirect('admin/service', $data);
        }
    }

    function slider()
    {
        $imagename = $this->Image->getBannerName();
        $data['imgname'] = $imagename;

        $this->load->view('admin/bannerupload', $data);
    }

    function uploadslider()
    {

        $config['upload_path'] = FCPATH . '\assets\banner';
        $config['encrypt_name'] = true;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';

        $config['max_width'] = 1500;
        $config['max_height'] = 800;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('slider')) {
            //  $this->session->set_flashdata('message', ' ');
        } else {

            $bannerName = $this->upload->data();
            $this->Image->bannerUpload($bannerName['file_name']);
        }
        redirect(site_url('admin/slider'), 'refresh');
    }

    public function servicesBanner()
    {
        $getservicescatagery = $this->Services->getservicescatagery();
        $servicesbanner = $this->AdminModel->getservicesdata();
        $data['services'] = $getservicescatagery;
        $data['servicesbanner'] = $servicesbanner;
        
        $this->load->view('admin/servicesbanner', $data);
    }

    public function uploadServicesImage()
    {
        $config['upload_path'] = FCPATH . '\assets\servicesimages';
        $config['encrypt_name'] = true;
        $config['allowed_types'] = 'gif|jpg|png|jpeg|jfif';
        $config['max_width'] = 1500;
        $config['max_height'] = 800;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('slider')) {
            //  $this->session->set_flashdata('message', ' ');
        } else {
            $servicesid = $this->input->post('services');
            $bannerName = $this->upload->data();
            $this->AdminModel->imageupload($servicesid, $bannerName['file_name']);
        }
        redirect(site_url('admin/servicesbanner'), 'refresh');
    }

}
