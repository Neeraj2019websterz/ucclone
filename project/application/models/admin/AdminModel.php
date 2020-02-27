<?php

class AdminModel Extends CI_Model {

    function checkAdmin($formdata) {

        $this->db->where("email", $formdata['email']);
        $this->db->where("password", $formdata['password']);
        $this->db->from('admin_secure');
        $res = $this->db->count_all_results();
        return $res;
    }

    function addServiceGroup($formdata) {

        $this->db->where('services_group', $formdata['services_group']);
        $q = $this->db->get('services_group');

        if ($q->num_rows() > 0) {

            $resp = array(
                'status' => false,
                'message' => 'Group name already exists',
            );
            return $resp;
        } else {
            $query = $this->db->insert('services_group', $formdata);

            if ($query) {

                $resp = array(
                    'status' => true,
                    'message' => 'Group name created',
                );
                return $resp;
            } else {
                $resp = array(
                    'status' => false,
                    'message' => 'Group name insert failure',
                );
                return $resp;
            }
        }
    }

    function getServicesList() {
//        $sql = "SELECT `services_group`.`services_group`, `services_categery`.`services_categery_list`,`sub_services_list`.`services_list`,`sub_services_list`.`service_fee` , `sub_services_list`.`convenience_fee` FROM `services_group` JOIN services_categery ON services_group.services_group_id=services_categery.services_group_id
//JOIN sub_services_list ON services_categery.services_catagery_id=sub_services_list.services_catagery_id ";
//
//        $query = $this->db->query($sql);
//        $result = $query->result_array();
//
//        $serviceArray = [];
//        foreach ($result as $value) {
//            $serviceArray[$value['services_group']] [$value['services_categery_list']][] = [
//                $value['services_list'], $value['service_fee'], $value['convenience_fee']];
//        }

        $query = $this->db->get('services_group');
        $serviceArray ['servGroup'] = $query->result();

//$query1 = $this->db->get('services_categery');
//$serviceArray ['servCategory']= $query1->result() ;
        $this->db->select('*');
        $this->db->join('services_categery', 'sub_services_list.services_catagery_id=services_categery.services_catagery_id');
        $query2 = $this->db->get('sub_services_list');
        $serviceArray ['servList'] = $query2->result();

//             echo "<pre>";
//        print_r($serviceArray);die;
        return $serviceArray;
    }

    function addServiceCategory($formdata) {

        $this->db->where('services_group_id', $formdata['services_group_id']);
        $this->db->where('services_categery_list', $formdata['services_categery_list']);
        $q = $this->db->get('services_categery');

        if ($q->num_rows() > 0) {

            $resp = array(
                'status' => false,
                'message' => 'Category name already exists',
            );
            return $resp;
        } else {
            $query = $this->db->insert('services_categery', $formdata);

            if ($query) {

                $resp = array(
                    'status' => true,
                    'message' => 'Category name created',
                );
                return $resp;
            } else {
                $resp = array(
                    'status' => false,
                    'message' => 'Category name insert failure',
                );
                return $resp;
            }
        }
    }

    function getSubServicesList() {
        $this->db->select('*');
        $this->db->join('services_categery', 'sub_services_list.services_catagery_id = services_categery.services_catagery_id');
        $this->db->from('sub_services_list');
        $query = $this->db->get();
        return $query->result();
    }

    public function addService($formdata) {
        $this->db->where('services_list', $formdata['services_list']);
        $this->db->where('services_catagery_id', $formdata['services_catagery_id']);
        $q = $this->db->get('sub_services_list');

        if ($q->num_rows() > 0) {

            $resp = array(
                'status' => false,
                'message' => 'Service name already exists',
            );
            return $resp;
        } else {
            $query = $this->db->insert('sub_services_list', $formdata);

            if ($query) {

                $resp = array(
                    'status' => true,
                    'message' => 'Service name created',
                );
                return $resp;
            } else {
                $resp = array(
                    'status' => false,
                    'message' => 'Service name insert failure',
                );
                return $resp;
            }
        }
    }

    public function serviceGroupNameUpdate($id, $formdata) {

        $this->db->set($formdata);
        $this->db->where('services_group_id', $id);
        $query = $this->db->update('services_group');

        if ($query) {

            $resp = array(
                'status' => true,
                'message' => 'Service Group Updated',
            );
            return $resp;
        } else {
            $resp = array(
                'status' => false,
                'message' => 'Service Group edit failure',
            );
            return $resp;
        }
    }

    public function getAllUsers() {
        $this->db->select('*');
        $this->db->from('professionals');
        $query = $this->db->get();
        $row['professionals'] = $query->result();
        
             
        $this->db->select('*');
        $this->db->from('users');
        $query2 = $this->db->get();
        $row['users'] = $query2->result();
        return $row;        
    }

}

?>