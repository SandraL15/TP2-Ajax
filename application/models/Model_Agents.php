<?php

class Model_Agents extends CI_Model
{
    public function GetAllAgents($numeroFormation){
          $sql = $this->db->query("SELECT prenom,nom FROM agent, inscription WHERE Agent.code = inscription.codeAgent AND numeroFormation='".$numeroFormation."'");
      return $sql->result();
    }
}