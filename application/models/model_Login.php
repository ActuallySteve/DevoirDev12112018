<?php

class Model_Login extends CI_Model
{
    public function seConnecter($tab)
    {
        $sql=$this->db>query("select idUser, nomUser, statutUser
                              from user
                              where nomUser='".$tab['nomUser']."'");
        return $sql->result();
    }
}
?>