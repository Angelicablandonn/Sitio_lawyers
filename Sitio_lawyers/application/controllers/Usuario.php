<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	function __construct(){
		parent::__construct();
	

		$this->load->model("Abogados_model");
		$this->load->model("Usuario_model");
		$this->load->model("Solicitudes_model");
		$this->session->set_userdata('session');
	}
	public function index()
	{
		if(!isset($_SESSION['usuario']))
		redirect(base_url().'Login');
		$this->load->view('Usuario/Includes/header');
		$this->load->view('Usuario/Includes/sidebar');
		$datos = array(
			"abogados" => $this->Abogados_model->listar()
		);
	
		$this->load->view('Usuario/index',$datos);
		$this->load->view('Usuario/Includes/footer');
	}
	public function about()
	{
		if(!isset($_SESSION['usuario']))
		redirect(base_url().'Login');
		$this->load->view('Usuario/Includes/header');
		$this->load->view('Usuario/Includes/sidebar');
		$this->load->view('Usuario/about');
		$this->load->view('Usuario/Includes/footer');
	
	
		
	}
	public function home()
	{
		if(!isset($_SESSION['usuario']))
		redirect(base_url().'Login');
		$this->load->view('Usuario/Includes/header');
		$this->load->view('Usuario/Home');
	
	
		
	}
	public function attorneys()
	{
		if(!isset($_SESSION['usuario']))
		redirect(base_url().'Login');
		$datos = array(
			"abogados" => $this->Abogados_model->listar()
		);
		$this->load->view('Usuario/Includes/header');
		$this->load->view('Usuario/Includes/sidebar');
		$this->load->view('Usuario/attorneys',$datos);
		$this->load->view('Usuario/Includes/footer');
	}
	public function blog()
	{
		if(!isset($_SESSION['usuario']))
		redirect(base_url().'Login');
		$this->load->view('Usuario/Includes/header');
		$this->load->view('Usuario/Includes/sidebar');
		$this->load->view('Usuario/blog');
		$this->load->view('Usuario/Includes/footer');	
	}
	public function case()
	{
		if(!isset($_SESSION['usuario']))
		redirect(base_url().'Login');
		$this->load->view('Usuario/Includes/header');
		$this->load->view('Usuario/Includes/sidebar');
		$this->load->view('Usuario/case');
		$this->load->view('Usuario/Includes/footer');	
			
	}
	public function contact()
	{
		if(!isset($_SESSION['usuario']))
		redirect(base_url().'Login');
		$this->load->view('Usuario/Includes/header');
		$this->load->view('Usuario/Includes/sidebar');
		$this->load->view('Usuario/contact');
		$this->load->view('Usuario/Includes/footer');	
	
	
		
	}
	public function practice_areas()
	{
		if(!isset($_SESSION['usuario']))
		redirect(base_url().'Login');
		$this->load->view('Usuario/Includes/header');
		$this->load->view('Usuario/Includes/sidebar');
		$this->load->view('Usuario/practice-areas');
		$this->load->view('Usuario/Includes/footer');	
	
	
	
		
	}
	public function practice_single()
	{
		if(!isset($_SESSION['usuario']))
		redirect(base_url().'Login');
	
		$this->load->view('Usuario/practice-single');
	
	
		
	}
	public function login(){

		$this->load->view('Usuario/login');
	}
	public function register(){
		
		$this->load->view('Usuario/register');
	}
	

    public function registrar_usuarios(){
        $this->load->model('Usuario_model');
        //1 crear una arreglo de datos
        $datos = array(
            "name" => $this->input->post("name"),
            "email" => $this->input->post("email"),
            "username" => $this->input->post("username"),
            "pass" => $this->input->post("pass"),    
        );
        //2 enviar al modelo
        $resultado = $this->Usuario_model->agregar($datos);
        //3 verificar si se guardaron los datos
        if( $resultado['guardado'] == true){
            //enviar a una vista
            echo "Se guardaron los datos";
			$this->load->view('Usuario/login');

        }else{
            // no se guardaron los datos

        }
    }

	public function verificar_usuario()
	{
	
		$this->load->model('Usuario_model');
		$resultado=$this->Usuario_model->verificar_usuario(
			$this->input->post("email"),
			$this->input->post("pass")
			
		);
		
		if($resultado){
			$usuario= array(
				'name'=> $resultado->name
			);
			$this->session->set_userdata('usuario', $usuario);
			redirect(base_url()."Index");
			
		}
		else{
			$this->session->set_flashdata('error_session', true);
	
			$resultado2=$this->Usuario_model->verificar_usuario_administrador(
				$this->input->post("email"),
				$this->input->post("pass")
				
			);
		
			if($resultado2){
				$administrador= array(
					'name'=> $resultado2->name
				);
				$this->session->set_userdata('administrador', $administrador);
				redirect(base_url()."Dashboard");
			}
			else{
				$this->session->set_flashdata('error_session', true);
				redirect(base_url()."Login");
			}
		}
	

	}
	public function verificar_administrador()
	{
	
		$this->load->model('Usuario_model');
		$resultado=$this->Usuario_model->verificar_usuario_administrador(
			$this->input->post("email"),
			$this->input->post("pass")
			
		);
	
		if($resultado){
			$administrador= array(
				'name'=> $resultado->name
			);
			$this->session->set_userdata('administrador', $administrador);
			redirect(base_url()."Dashboard");
		}
		else{
			$this->session->set_userdata('error_session', true);
			redirect(base_url()."Login");
		}
	}
	
	
	public function cerrar_sesion(){
		$this->session->unset_userdata('usuario');

		redirect(base_url()."Login");
	}

	public function registrar_solicitudes(){
        $this->load->model('Solicitudes_model');
        //1 crear una arreglo de datos
        $datos = array(
            "Nombre" => $this->input->post("Nombre"),
            "Correo" => $this->input->post("Correo"),
            "Asunto" => $this->input->post("Asunto"),
			"Servicio" => $this->input->post("Servicio"),
            "Mensaje" => $this->input->post("Mensaje"),    
			"Estado" => "Recibida"
        );
        //2 enviar al modelo
        $resultado = $this->Solicitudes_model->agregar($datos);
        //3 verificar si se guardaron los datos
        if( $resultado['guardado'] == true){
            //enviar a una vista
            echo "Se envio su solicitud";
			redirect(base_url()."Index");

        }else{
            // no se guardaron los datos

        }
    }
	
}