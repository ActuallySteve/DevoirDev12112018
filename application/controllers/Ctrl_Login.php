<?php
class Ctrl_Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('view_Login');
    }
    public function seConnecter()
    {
        if (isset($_POST['btnConnection']))
        {
            if(!$_POST['leNom'] == '')
            {
            $nomUser = $this->input->post('leNom');

            $tab = array(
                'nomUser' => $nomUser,
            );
            $this->load->model('model_Login');

            $data = $this->model_Login->seConnecter($tab);
            if (count($data) != 0)
            {
                foreach($data as $row)
                {
                    $this->load->library('session');
                    $session_id = 
                    [
                        'idUser' => $row->idUser,
                        'nomUser' => $row->nomUser,
                        'statutUser' => $row->statutUser,
                    ];
                    $this->session->set_userdata('infoLog', $session_id);
                }
                $this->load->model('model_Region');
                $data['lesRegions']= $this->model_Region->getAllRegion();
                $this->load->view('view_Accueil', $data);
            }
            else
            {
                echo "Veuillez écrire un nom valide";    
            }
            }
            else 
            {
                echo "Veuillez écrire un nom"; 
            }
        }

    }
}
