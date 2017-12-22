<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
		parent::__construct();		
  		$this->load->model('Slider_model');	
		$this->load->model('Contenido_model');	
		$this->load->helper('extras');
		
    }	

	public function index()
	{
    	$data['list'] =  $this->Slider_model->get_all(1);
    	$data['servicios'] =  $this->Contenido_model->get_all(1); // Obtener listado de Servicios

		$this->load->view('home' , $data);
	}

	// Re direccion a la pagina detalle del servicio.
	public function servicios()
	{

		$id = $this->uri->segment(3);		
		$data['list'] 	   =  $this->Slider_model->get_all(1);

		$data['servicios'] =  $this->Contenido_model->get_all(1); // ID <> Obtener listado de Servicios
		$data['servicio']  =  $this->Contenido_model->get_by_id($id); // detalle
		
		$this->load->view('servicio_detalle' ,$data );
	}	

	public function blog(){

		$data = null;
		$id = $this->uri->segment(3);		
		$data['blog'] =  $this->Contenido_model->get_all(2); // ID <> Obtener listado de Servicios			
	
		if($id){
			$data['blog_detalle']  =  $this->Contenido_model->get_by_id($id); // detalle
			$this->load->view('blog_detalle',$data );			
		}else{

			$this->load->view('blog',$data );		
		}

		
	}

}
