<?php

class Model_Formation extends CI_Model
{
    public function GetAllFormations($num){
         $sql = $this->db->query("select * from formation where numeroActivite=".$num);
       
       $tab=array();
       foreach ($sql -> result()as $row){
           $tab[]=$row;
       }
       return $tab;
    }
    
}