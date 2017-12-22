<?php

class Login_model extends CI_Model {


        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function validate($usuario, $password)
        {

            $query = $this->db->query("select * from usuarios where usuario = '".$usuario."' and contrasena = '".$password."' ");
            //return  $query->num_rows();
            return $query->result();                
        }
        

}
?>