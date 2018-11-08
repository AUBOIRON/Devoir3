<?php

class CtrlAccueil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Accueil');
    }
    public function index()
    {
        
        $this->load->view('ViewAccueil',$data);
    }
    
   
}

