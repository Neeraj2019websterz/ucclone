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
class State Extends CI_Model
{
    public function insertCity()
    {
        echo"insertcity";
    }

    public function getState()
    {
        $query = $this->db->get('state');

        return $query->result();
    }

}
