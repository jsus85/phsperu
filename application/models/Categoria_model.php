<?php

class Categoria_model extends CI_Model {


        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

          public function get_all()
        {
                 $this->db->select('nombres,id');
                 $this->db->from('categoria');  
                 $this->db->order_by("nombres", "asc");     
                 return $this->db->get()->result();   
        }
        

}
?>