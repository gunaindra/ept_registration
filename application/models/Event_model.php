<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Event_model extends CI_Model
{

   function __construct(){
      // Call the Model constructor
      parent::__construct();
   }

   public function get(){ # kondisi = array();
      $this->db->select('te.id_event, DATE_FORMAT(te.tanggal_event, "%e %M %Y") AS tanggal_event, te.venue, COUNT(te.id_event) AS total, te.kuota - COUNT(te.id_event) AS sisa_kuota');
      $this->db->from('tbl_event AS te');
      $this->db->join('tbl_registrant as tr', 'te.id_event = tr.id_event');
      $this->db->where(array('aktif'=>1));
      $this->db->group_by('te.id_event');
      $this->db->order_by('kuota');
   	return $this->db->get();
   }
}