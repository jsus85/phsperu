<?php

class Contenido_model extends CI_Model {


        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

       public function get_all($id_categoria=null)
       {

                 $this->db->select('c.titulo,c.imagen,c.id,c.estado,c.descripcion,c.resumen,cat.nombres categoria');
                 $this->db->from('contenidos c');  
                 $this->db->join('categoria cat', 'cat.id = c.categoria_id');

                 if($id_categoria != ''){
                    $this->db->where('cat.id', $id_categoria);
                 }

                 $this->db->order_by("c.id", "desc");     
                 return $this->db->get()->result();   
        }

        public function save($data){

                $insert = $this->db->insert('contenidos', $data);
                return $insert;
        }

        
        public function get_by_id($id)
        {
                    
            $this->db->select('*');
            $this->db->from('contenidos');
            $this->db->where('id', $id);
            $query = $this->db->get();
            return $query->result_array(); 
        }

         public  function update($id, $data)
            {
                $this->db->where('id', $id);
                $this->db->update('contenidos', $data);
                    
            }

        public function delete($id){
                $this->db->where('id', $id);
                $this->db->delete('contenidos'); 
        }

        public function state($id){

                $this->db->select('estado');
                $this->db->from('contenidos');
                $this->db->where('id', $id);
                $query = $this->db->get();
                
                $estado        = ($query->result_array()[0]['estado']==1)?'0':'1';
                $data_to_areas = array('estado'   => $estado );
                
                $this->db->where('id', $id);
                $this->db->update('contenidos', $data_to_areas);
            }

}
?>