<?php
class Ctrl_Ville extends CI_Controller
{
    public function AfficherLesVilles($idRegion)
    {
        $this->load->model("model_Ville");
        $data['lesVilles'] = $this->model_Ville->getAllVillesByIdRegion($idRegion);
        $this->load->view("view_Villes", $data);
    }
}