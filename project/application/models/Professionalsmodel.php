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
class Professionalsmodel  Extends CI_Model
{
    public function professionalsInsertFromData($formdata)
    {
        $res = $this->db->insert('professionals', $formdata);
        if ($res) {

            return "Succefully  registered";
        } else {
            return false;
        }
    }

//    public function getUserlogindata($formdata)
//    {
//
//        $this->db->where("email", $formdata['email']);
//        $this->db->where("password", $formdata['password']);
//        $this->db->from('users');
//        $res = $this->db->count_all_results();
//        return $res;
//    }

}
