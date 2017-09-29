<?php

class CtrlAccueil extends CI_Controller
{
    public function index(){
 
       $this->load->model("Model_Activite"); 
       $data['lesActivites'] = $this->Model_Activite->GetAllActivite();
       $this->load->view("Vue_Sncf",$data);
    }    
    public function afficherLesFormations(){    
         $numero=$_GET['numero'];
         $this->load->model("Model_Formation"); 
         $data['lesFormation'] = $this->Model_Formation->GetAllFormations($numero);
         $this->load->view("v_formation",$data);
    } 
       public function afficherLesAgents(){
        $numeroFormation=$_GET['numeroFormation'];
         $this->load->model("Model_Agents"); 
         $data['lesAgents'] = $this->Model_Agents->GetAllAgents($numeroFormation);
         $this->load->view("v_agents",$data);
    }
    
}

