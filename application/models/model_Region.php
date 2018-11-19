<?php
class model_Region extends CI_Model
{
    public function getAllRegions()
    {
        $this->load->library('session');
        $id = $this->session->userdata('infoLog');
        $sql = $this->db->query("select idRegion, nomRegion, scoreRegion
                                 from region
                                 where idUser='".$id['idUser']."'");
        return $sql->result();
    }
}



?>