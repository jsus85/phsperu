<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contenidos extends CI_Controller {


	public function __construct()
    {
		parent::__construct();		
  		$this->load->model('Contenido_model');	
		$this->load->model('Categoria_model');		
    }	


	public function index()
	{
	    if($this->session->userdata('is_logged_in')==true){  // validacion para los usuario logeado al admin

	    	$data['list'] =  $this->Contenido_model->get_all();
			$this->load->view('admin/contenidos',$data);
		}else{
			 redirect(base_url());

		}	
	}

	// Guardar
	public function add(){

	  if($this->session->userdata('is_logged_in')==true){	// validacion para los admin logeado 
	
		$data['categorias'] = $this->Categoria_model->get_all();	

		//datos enviados por post 
		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{

			// Reglas de validacion
			$this->form_validation->set_rules('categoria', 'Categoria', 'trim|required');			
			$this->form_validation->set_rules('titulo', 'Título', 'trim|required');
			$this->form_validation->set_rules('descripcion', 'Descripcion', 'trim|required');			
			$this->form_validation->set_rules('resumen', 'Resumen', 'trim|required');			

			if($this->form_validation->run() == FALSE)
			{
				$data['message_error'] = TRUE;
			}else{

				// Guardar...

							$config['upload_path']          = './assets/images/contenidos';
							$config['allowed_types']        = 'gif|jpg|png';
				
							$this->load->library('upload', $config);

							if ( ! $this->upload->do_upload('imagen'))
							{
								$error = array('error' => $this->upload->display_errors());
								//$this->load->view('upload_form', $error);
							}else{	
								
								//echo $this->upload->data('file_name');       
							}

							$data_to_fields = array(
											'titulo'     => $this->input->post('titulo'),
											'resumen' => $this->input->post('resumen'),											
											'descripcion' => $this->input->post('descripcion'),
											'categoria_id' => $this->input->post('categoria'),
											'imagen'		=> $this->upload->data('file_name')
 	
							);

			                //si inserta correctamente  retorna true
			                if($this->Contenido_model->save($data_to_fields)){
								  redirect('contenidos', 'refresh');
			                }else{
			                    $data['message_error'] = FALSE; 
			                }

			}// Else	
		}// IF				


			$this->load->view('admin/contenidos_add.php',$data); 

		}else{
			redirect(base_url());
		}	
	}// End IF 


	public function edit(){

		$id = $this->uri->segment(3);		
		$data['categorias'] = $this->Categoria_model->get_all();	

		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
					
					$this->form_validation->set_rules('titulo', 'Titulo', 'trim|required');

					if($this->form_validation->run() == FALSE){
							$data['message_error'] = TRUE;
					}else{

							// Upload Imagen
							$config['upload_path']          = './assets/images/contenidos';
							$config['allowed_types']        = 'gif|jpg|png';
	
							$this->load->library('upload', $config);

							if ( ! $this->upload->do_upload('imagen'))
							{
								$error = array('error' => $this->upload->display_errors());
							}else{	
												
								if($this->upload->data('file_name')!=''){

										$data_to_imagen = array('imagen' => $this->upload->data('file_name') );			
										$this->Contenido_model->update($id, $data_to_imagen);
								}

							}// End upload

							// Update Slider
							$data_to_fields = array(
											'titulo'     => $this->input->post('titulo'),
											'resumen' => $this->input->post('resumen'),											
											'descripcion' => $this->input->post('descripcion'),
											'categoria_id' => $this->input->post('categoria')
 	
							);

							$this->Contenido_model->update($id, $data_to_fields);
							redirect('contenidos', 'refresh');
							
		}
	}	

        $data['contenido'] = $this->Contenido_model->get_by_id($id);
        $this->load->view('admin/contenidos_edit.php',$data); 

	}

	 public function delete()
	 {	      
	     
	     $id = $this->uri->segment(3);
	     $this->Contenido_model->delete($id);
	     redirect('contenidos');
	    
	 }//delete

	// Cambiar de estado
	 public function state()
	 {	      

        $id = $this->uri->segment(3);
        $this->Contenido_model->state($id);
        redirect('contenidos');	    

	 }//update


}