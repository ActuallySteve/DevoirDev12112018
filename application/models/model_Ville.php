<?php

class Model_Formation extends CI_Model
{
    public function getAllVillesByIdRegion($idReg)
    {
        $sql = $this->db->query("select idVille, nomVille, scoreVille
                                 from ville
                                 where numRegion= ".$idReg);
        return $sql->result();
    }
}

?>