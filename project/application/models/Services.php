<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author SrDev
 */
class Services Extends CI_Model
{
    public function getservicesgroup()
    {
        $this->db->select('*');
        $this->db->from('services_group');
        $query = $this->db->get();

        return $query->result();
    }

    public function getservicescatagery()
    {
        $this->db->select('*');
        $this->db->from('services_categery');
        $this->db->join('services_group', 'services_categery.services_group_id=services_group.services_group_id');
        $query = $this->db->get();

        return $query->result();
    }

    public function getServicesList($id)
    {
        $this->db->select('*');
        $this->db->from('sub_services_list');
        $this->db->where('services_catagery_id', $id);

        $query = $this->db->get();

        return $query->result();
    }

    public function test()
    {

        $this->db->select('*');
        $this->db->from('services_categery');
        $this->db->join('professionals', ' professionals.services_list_id = services_categery.services_catagery_id', 'inner');
        $r = $this->db->get();
     
    }

}
