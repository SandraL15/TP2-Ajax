<?php

class Model_Activite extends CI_Model
{
    public function GetAllActivite(){
        $sql = $this->db->query("select * from activite");
       
       return $sql->result();
    }
    public function GetActiviteById($id){
        
        $sql = $this->db->query("select * from activite where numero = ",$id);
       
       return $sql->result();
    }
}