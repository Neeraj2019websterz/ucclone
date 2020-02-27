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
class Profilepicmodel Extends CI_Model
{
   public function profilePicProfessionalUpload($email,$picName)
   {
         $data = array(
            'profile_pic' => $picName,
        );
         
        $this->db->where('email', $email);
        $this->db->update('professionals', $data);
   }

}
