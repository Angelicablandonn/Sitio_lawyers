<?php
defined('BASEPATH') OR exit('No direct script access allowed');

clasS Administrador extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION['administrador']))
		redirect(base_url().'Login');
	
		$this->load->model("Abogados_model");
		$this->load->model("Usuario_model");
		$this->load->model("Solicitudes_model");
	}
	public function cerrar_sesion(){

		$this->session->unset_userdata('administrador');
		redirect(base_url()."Login");
	}
	public function index()
	{
	
		$this->load->view('Includes/header');
		$this->load->view('Includes/sidebar');
		$this->load->view('Administrador/dashboard');
		$this->load->view('Includes/footer');
		
	}
	public function Login()
	{
		$this->load->view('Includes/header');
		$this->load->view('Administrador/login');
		
	}
	Public function tables()
	{
		$this->load->view('Includes/header');
		$this->load->view('Includes/sidebar');
		$this->load->view('Administrador/tables');
		$this->load->view('Includes/footer');
	}


	public function gestionar_abogados_agregar(){
	
		$this->load->view('Includes/header');
		$this->load->view('Includes/sidebar');
		$this->load->view("Administrador/agregar");
		$this->load->view('Includes/footer');
	}

	public function gestionar_usuarios_agregar(){
		$this->load->view('Includes/header');
		$this->load->view('Includes/sidebar');
		$this->load->view("Administrador/Agregar_usuario");
		$this->load->view('Includes/footer');
	}
	public function gestionar_solicitudes_agregar(){
		$this->load->view('Includes/header');
		$this->load->view('Includes/sidebar');
		$this->load->view("Administrador/Agregar_solicitud");
		$this->load->view('Includes/footer');
	}

	public function gestionar_abogados_eliminar($abogado_id){
		$resultado=$this->Abogados_model->eliminar($abogado_id);
	if($resultado){
		$this->session->set_flashdata('eliminacion_ok',true);

		redirect(base_url().'gestionar-abogados/listar');
		
	}
	}
	public function gestionar_abogados_editar(){
		$datos = array(
			"nit" => $this->input->post("nit"),
            "nombre" => $this->input->post("nombre"),
            "telefono" => $this->input->post("telefono"),
            "correo" => $this->input->post("correo"),
            "ciudad" => $this->input->post("ciudad"),
            "direccion" => $this->input->post("direccion"),
			"area" => $this->input->post("area"),
			"imagen" => $this->input->post("imagen")
        
        );
		$resultado=$this->Abogados_model->editar($this->input->post("_id"), $datos);
if($resultado>0)
{
	
	$this->session->set_flashdata('modificacion_ok',true);
	
	redirect(base_url().'gestionar-abogados/listar');
	

}
	}
	public function gestionar_solicitudes_editar(){
		$datos = array(
	
			
				"Nombre" => $this->input->post("Nombre"),
				"Correo" => $this->input->post("Correo"),
				"Asunto" => $this->input->post("Asunto"),
				"Servicio" => $this->input->post("Servicio"),
				"Mensaje" => $this->input->post("Mensaje"),    
				"Estado" =>  $this->input->post("Estado")
			);
      
		$resultado=$this->Solicitudes_model->editar($this->input->post("_id"), $datos);
if($resultado>0)
{
	
	$this->session->set_flashdata('modificacion_ok',true);
	
	redirect(base_url().'gestionar-solicitudes/listar');
	

}
	}

	public function gestionar_usuarios_eliminar($usuario_id){
		$resultado=$this->Usuario_model->eliminar($usuario_id);
	if($resultado){
		$this->session->set_flashdata('eliminacion_ok',true);

		redirect(base_url().'gestionar-usuarios/listar');
		
	}
	}
	
	public function gestionar_solicitudes_eliminar($solicitud_id){
		$resultado=$this->Solicitudes_model->eliminar($solicitud_id);
	if($resultado){
		$this->session->set_flashdata('eliminacion_ok',true);

		redirect(base_url().'gestionar-solicitudes/listar');
		
	}
	}
	public function gestionar_usuarios_editar(){
		
			$datos = array(
				"name" => $this->input->post("name"),
				"email" => $this->input->post("email"),
				"username" => $this->input->post("username"),
				"pass" => $this->input->post("pass"),    
			);
      
		$resultado=$this->Usuario_model->editar($this->input->post("_id"), $datos);
if($resultado>0)
{
	
	$this->session->set_flashdata('modificacion_ok',true);
	redirect(base_url().'gestionar-usuarios/listar');
}
	}


	public function gestionar_abogados_buscar($abogado_id){
	
		$resultado=$this->Abogados_model->buscar($abogado_id);
		$this->load->view('Includes/header');
		$this->load->view('Includes/sidebar');
		$this->load->view("administrador/editar",array(	'abogado'=>$resultado));
		$this->load->view('Includes/footer');
	
		
	}

	public function gestionar_usuarios_buscar($usuario_id){
	
		$resultado=$this->Usuario_model->buscar($usuario_id);
		$this->load->view('Includes/header');
		$this->load->view('Includes/sidebar');
		$this->load->view("administrador/editar",array(	'usuario'=>$resultado));
		$this->load->view('Includes/footer');
	
		
	}
	
	public function gestionar_solicitudes_buscar($solicitud_id){
	
		$resultado=$this->Solicitudes_model->buscar($solicitud_id);
		$this->load->view('Includes/header');
		$this->load->view('Includes/sidebar');
		$this->load->view("administrador/editar_solicitud",array(	'solicitudes'=>$resultado));
		$this->load->view('Includes/footer');
	
		
	}

	public function guardar_usuarios(){
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
			redirect(base_url().'gestionar-usuarios/listar');
			

        }else{
            // no se guardaron los datos

        }
    }
	public function guardar_solicitud(){
        $this->load->model('Solicitudes_model');
        //1 crear una arreglo de datos
        $datos = array(
            "Nombre" => $this->input->post("Nombre"),
            "Correo" => $this->input->post("Correo"),
            "Asunto" => $this->input->post("Asunto"),
			"Servicio" => $this->input->post("Servicio"),
            "Mensaje" => $this->input->post("Mensaje"),    
			"Estado" =>  $this->input->post("Estado")
        );
        //2 enviar al modelo
        $resultado = $this->Solicitudes_model->agregar($datos);
        //3 verificar si se guardaron los datos
        if( $resultado['guardado'] == true){
            //enviar a una vista
            echo "Se registro su solicitud";
			redirect(base_url()."gestionar-solicitudes/listar");

        }else{
            // no se guardaron los datos

        }
	}

    public function guardar_abogados(){
        $this->load->model('Abogados_model');
        //1 crear una arreglo de datos
        $datos = array(
            "nit" => $this->input->post("nit"),
            "nombre" => $this->input->post("nombre"),
            "telefono" => $this->input->post("telefono"),
            "correo" => $this->input->post("correo"),
            "ciudad" => $this->input->post("ciudad"),
            "direccion" => $this->input->post("direccion"),
			"area" => $this->input->post("area"),

	
        
        );
        //2 enviar al modelo
        $resultado = $this->Abogados_model->agregar($datos);

        //3 verificar si se guardaron los datos
        if( $resultado['guardado']){
           
			$config['upload_path']   = './uploads/';
			$config['file_name']   ="abogado_".$resultado['abogado_id'];
        $config['allowed_types'] = 'png|jpg|gif';
        $config['max_size']      = 20480;
        $config['max_width']     = 20249;
        $config['max_height']    = 20240;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('imagen'))
        {
            $error = array('error' => $this->upload->display_errors());

            $this->session->set_userdata('error_imagen', true);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
			$datos=array(
				"nit" => $this->input->post("nit"),
            "nombre" => $this->input->post("nombre"),
            "telefono" => $this->input->post("telefono"),
            "correo" => $this->input->post("correo"),
            "ciudad" => $this->input->post("ciudad"),
            "direccion" => $this->input->post("direccion"),
			"area" => $this->input->post("area"),
				"url_imagen" => $data['upload_data']['file_name']
			
			);
			$this->Abogados_model->editar($resultado['abogado_id'], $datos);
		}
		redirect(base_url().'gestionar-abogados/listar');
        }else{
            // no se guardaron los datos

        }

    }
	
	public function listar_abogados(){
            
		$datos = array(
			'abogado'=> $this->Abogados_model->listar()
		);
		
	
		$this->load->view('Includes/header');
		$this->load->view('Includes/sidebar');

		$this->load->view("administrador/Listar", $datos);
		$this->load->view('Includes/footer');
		
	}
	public function listar_usuarios(){
            
		$datos = array(
			'usuario'=> $this->Usuario_model->listar()
		);
		
	
		$this->load->view('Includes/header');
		$this->load->view('Includes/sidebar');

		$this->load->view("administrador/listar_usuarios", $datos);
		$this->load->view('Includes/footer');
		
	}
	public function listar_solicitudes(){
            
		$datos = array(
			'solicitudes'=> $this->Solicitudes_model->listar()
		);
		
	
		$this->load->view('Includes/header');
		$this->load->view('Includes/sidebar');

		$this->load->view("administrador/listar_solicitudes", $datos);
		$this->load->view('Includes/footer');
		
	}
	public function listar_solicitudesrecibidas(){
            
		$datos = array(
			'solicitudes'=> $this->Solicitudes_model->listarrecibida()
		);
		
	
		$this->load->view('Includes/header');
		$this->load->view('Includes/sidebar');

		$this->load->view("administrador/listar_solicitudes", $datos);
		$this->load->view('Includes/footer');
		
	}
	public function listar_solicitudesenproceso(){
            
		$datos = array(
			'solicitudes'=> $this->Solicitudes_model->listarenproceso()
		);
		
	
		$this->load->view('Includes/header');
		$this->load->view('Includes/sidebar');

		$this->load->view("administrador/listar_solicitudes", $datos);
		$this->load->view('Includes/footer');
		
	}
	public function listar_solicitudesresueltas(){
            
		$datos = array(
			'solicitudes'=> $this->Solicitudes_model->listarresuelto()
		);
		
	
		$this->load->view('Includes/header');
		$this->load->view('Includes/sidebar');

		$this->load->view("administrador/listar_solicitudes", $datos);
		$this->load->view('Includes/footer');
		
	}

	

	

	

	
}