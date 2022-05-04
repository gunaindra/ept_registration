<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Peserta_model extends CI_Model
{

   function __construct(){
      // Call the Model constructor
      parent::__construct();
   }

    public function insert($data){
        $this->db->insert('tbl_peserta',$data);
    }

}