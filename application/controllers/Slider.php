<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {


	public function __construct()
    {
		parent::__construct();		
  		$this->load->model('Slider_model');	
			
    }	


	public function index()
	{

	    if($this->session->userdata('is_logged_in')==true){//  validacion para los admin logeado 

	    	$data['list'] =  $this->Slider_model->get_all();
			$this->load->view('admin/slider',$data);

		}else{
			redirect(base_url());
		}	
	}

	// Guardar
	public function add(){

	  if($this->session->userdata('is_logged_in')==true){ //  validacion para los admin logeado 			

		$data = null;	
		//datos enviados por post 
		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{

			// Reglas de validacion
			$this->form_validation->set_rules('nombres', 'Nombres', 'trim|required');
			$this->form_validation->set_rules('descripcion', 'Descripcion', 'trim|required');			
			$this->form_validation->set_rules('url', 'URL', 'trim|required');			

			if($this->form_validation->run() == FALSE)
			{
				$data['message_error'] = TRUE;
			}else{

				// Guardar...

							$config['upload_path']          = './assets/images/slider';
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
											'nombres'     => $this->input->post('nombres'),
											'descripcion' => $this->input->post('descripcion'),
											'url' => $this->input->post('url'),
											'imagen'		=> $this->upload->data('file_name'),
 	
							);

			                //si inserta correctamente  retorna true
			                if($this->Slider_model->save($data_to_fields)){
								  redirect('slider', 'refresh');
			                }else{
			                    $data['message_error'] = FALSE; 
			                }
			                
			}// Else	
		}// IF				
			
			$this->load->view('admin/slider_add.php',$data); 

		}else{
				        redirect(base_url());

		}	

	}// End IF 


	public function edit(){

		$id = $this->uri->segment(3);		

		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
					
					$this->form_validation->set_rules('nombres', 'Nombres', 'trim|required');

					if($this->form_validation->run() == FALSE){
							$data['message_error'] = TRUE;
					}else{

							// Upload Imagen
							$config['upload_path']          = './assets/images/slider';
							$config['allowed_types']        = 'gif|jpg|png';
	
							$this->load->library('upload', $config);

							if ( ! $this->upload->do_upload('imagen'))
							{
								$error = array('error' => $this->upload->display_errors());
							}else{	
												
								if($this->upload->data('file_name')!=''){

										$data_to_imagen = array('imagen' => $this->upload->data('file_name') );			
										$this->Slider_model->update($id, $data_to_imagen);
								}

							}// End upload

							// Update Slider
							$data_to_fields = array(
											'nombres'     => $this->input->post('nombres'),
											'descripcion' => $this->input->post('descripcion'),
											'url' => $this->input->post('url')
 	
							);

							$this->Slider_model->update($id, $data_to_fields);
							redirect('slider', 'refresh');
							
		}
	}	

        $data['slider'] = $this->Slider_model->get_by_id($id);
        $this->load->view('admin/slider_edit.php',$data); 

	}

	 public function delete()
	 {	      
	     
	     $id = $this->uri->segment(3);
	     $this->Slider_model->delete($id);
	     redirect('slider');
	    
	 }//delete

	// Cambiar de estado
	 public function state()
	 {	      

        $id = $this->uri->segment(3);
        $this->Slider_model->state($id);
        redirect('slider');	    

	 }//update


}