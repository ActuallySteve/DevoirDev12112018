<?php

class Ctrl_Accueil extends CI_Controller
{
    public function index()
    {
        $this->load->view("view_Accueil");
    }
    public function Connection()
    {
        if (isset($_POST['btnConnection']))
        {
            $nom = $this->input->post('leNom');

            $tab = array(
                'nomUser' => $nom,
            );
            $this->load->model('model_Login');

        }
    }
}



?>