<?php

class Model_Accueil extends CI_Model
{
    public function getAllRegions()
    {
        $sql = $this->db->get('region');
        foreach ($sql->result() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }
}

