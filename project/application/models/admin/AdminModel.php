<?php

class AdminModel Extends CI_Model {

    function checkAdmin($formdata) {

        $this->db->where("email", $formdata['email']);
        $this->db->where("password", $formdata['password']);
        $this->db->from('admin_secure');
        $res = $this->db->count_all_results();
        return $res;
    }

}

?>