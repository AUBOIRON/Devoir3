<?php

class Model_Regions extends CI_Model
{
    public function getRegionsByStatut($statutUser)
    {
        $sql = $this->db->select('*')->from('user')->where('statutUser',$statutUser);
        $sql = $this->db->get();
        foreach ($sql->result() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }
}

