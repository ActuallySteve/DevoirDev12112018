<?php

class Ctrl_Accueil extends CI_Controller
{
    public function index()
    {
        $this->load->model('model_Region');
        $data['lesRegions'] = $this->model_Region->getAllRegion();
        $this->load->view("view_Accueil");
    }
}



?>