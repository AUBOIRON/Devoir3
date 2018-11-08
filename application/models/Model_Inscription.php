<?php
class Model_Inscription extends CI_Model
{
    function UpDate()
    {
        
        $tab1 = explode(",",$tab1);
        $tab2 = explode(",",$tab2);
        for($i=0; $i<count($tab1);i++)
        {
            $sql = $this->db->query("update inscritpion set presence = ".$tab2[$i]." where codeAgent = '".$tab1[$i]."' and numeroFormation ='".$num. "'");
        }
    }
}