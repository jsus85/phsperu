<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function __construct()
    {
		parent::__construct();		
		$this->load->helper('security');
		$this->load->model('Login_model');       
    }	


	public function index()
	{
		$this->load->view('admin/login');
	}

	public function panel(){
		
		if($this->session->userdata('is_logged_in')==true){
			
			$this->load->view('admin/panel');
		}else{
			redirect(base_url());

		}		
	}

	// Login para el panel administracion
	public function validar(){

		$this->form_validation->set_rules('usuario', 'Usuario', 'trim|required|xss_clean');
		$this->form_validation->set_rules('contrasena', 'Password', 'trim|required|xss_clean');
	
		if($this->form_validation->run() == FALSE)
		{
			$data['message_error'] = TRUE;
			$this->load->view('admin/login',$data);

		}else{

			
			$user_name = $this->input->post('usuario');
			$password  = $this->input->post('contrasena');
			$is_valid = $this->Login_model->validate($user_name, $password);
					

			if(isset($is_valid[0]->estado)){

				if( $is_valid[0]->estado ==1 )
				{
				
					$data = array(
						'nombres'    => $is_valid[0]->nombres,
						'idUsuario'   => $is_valid[0]->id,
						'is_logged_in' => true
					);
					$this->session->set_userdata($data);

					redirect(base_url('panel'));					
				
				}else // incorrect username or password
				{
					$data['message_error'] = TRUE;					
					$this->load->view('admin/login', $data);	
				}

			}else{

					$data['message_error'] = TRUE;					
					$this->load->view('admin/login', $data);	

			}	


		}// ELSE

	}//End funcion




	 public function logout() {


        $this->session->sess_destroy();
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        redirect(base_url());
    }



}