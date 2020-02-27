<?php

class Image Extends CI_Model
{
    public function bannerUpload($imagename)
    {
        $data = array(
            'banner_name' => $imagename,
        );

        $this->db->insert('banner', $data);
    }
    public function getBannerName()
    {
        $this->db->select('*');
        $this->db->from('banner');
        $this->db->where('status',0);
        $query=$this->db->get();
        return $query->result();

    }

}

?>