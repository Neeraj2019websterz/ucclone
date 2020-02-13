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
	public function getUserData()
    {
        $query = $this->db->get('users');
        print_r($query);




    }
     
   

}
