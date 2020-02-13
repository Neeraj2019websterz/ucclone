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
class User Extends CI_Model
{
    public function insertUserData($data)
    {
        $res = $this->db->insert('users', $data);
        if ($res) {

            return "Succefully  registered";
        }
        else
        {
            return false;
        }
    }

}
