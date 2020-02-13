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
class AdminModel Extends CI_Model {

    function checkAdmin($formdata) {
        $this->db->where("email", $formdata['email']);
        $this->db->where("password", $formdata['password']);
        $this->db->from('admin_secure');
        $res= $this->db->count_all_results();
        return $res;
    }

}

?>