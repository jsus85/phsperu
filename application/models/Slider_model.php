<?php

class Slider_model extends CI_Model {


        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

       public function get_all($estado=null)
        {
                 $this->db->select('nombres,imagen,id,estado,descripcion,url');
                 $this->db->from('slider');  
                 if($estado != ''){
                      $this->db->where('estado', $estado);
                 }
                 $this->db->order_by("id", "desc");     
                 return $this->db->get()->result();   
        }

        public function save($data){

                $insert = $this->db->insert('slider', $data);
                return $insert;
        }

        
        public function get_by_id($id)
        {
                    
            $this->db->select('*');
            $this->db->from('slider');
            $this->db->where('id', $id);
            $query = $this->db->get();
            return $query->result_array(); 
        }

         public  function update($id, $data)
            {
                $this->db->where('id', $id);
                $this->db->update('slider', $data);
                    
            }

        public function delete($id){
                $this->db->where('id', $id);
                $this->db->delete('slider'); 
        }

        public function state($id){

                $this->db->select('estado');
                $this->db->from('slider');
                $this->db->where('id', $id);
                $query = $this->db->get();
                
                $estado        = ($query->result_array()[0]['estado']==1)?'0':'1';
                $data_to_areas = array('estado'   => $estado );
                
                $this->db->where('id', $id);
                $this->db->update('slider', $data_to_areas);
            }

}
?>