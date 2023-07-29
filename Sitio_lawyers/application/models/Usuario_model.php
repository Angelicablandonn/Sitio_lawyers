<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

 function __construct() {
        parent::__construct();
        $this->load->library("mongodb");
        $this->db=$this->mongodb->db()->usuario;
        $this->administrador=$this->mongodb->db()->administrador;
    
    } 

    public function buscar($usuario_id){
        try{
            $result= $this->db->findOne(array(
                '_id'  =>  $this->mongodb->getObjetId($usuario_id)
               
            ));
              return $result;
        }
        catch (\MongoDB\Driver\Exception\InvalidArgumentException $th) {
            return null;
        }
    }
    public function verificar_usuario($email, $pass){
        try{
            $result= $this->db->findOne(array(
                "email"=> $email,
                "pass"=> $pass
            ));
              return $result;
        }
        catch (\MongoDB\Driver\Exception\InvalidArgumentException $th) {
            return null;
        }
    }
    public function listar(){
        //se buscan los datos, se obtienen todos los datos
        // Mostrar todos los datos
        // un arreglo de datos 
        return $this->db->find(array());
    }

    public function verificar_usuario_administrador($email, $pass){
        try{
            $result= $this->administrador->findOne(array(
                "email"=> $email,
                "pass"=> $pass
            ));
              return $result;
        }
        catch (\MongoDB\Driver\Exception\InvalidArgumentException $th) {
            return null;
        }
    }
  function agregar($usuario){
        $result = $this->db->insertOne($usuario);
        if($result->getInsertedCount()>0){
            return array("guardado"=> true, "usuario_id"=> $result->getInsertedId());
          
          } 
           else{
               return array ("guardado"=> false);

            }
        
        }

        function editar($usuario_id, $datos){
			$resultado = $this->db->updateOne(
                array(
                    "_id" =>  $this->mongodb->getObjetId($usuario_id)
                ),
                array(  
                    '$set' => $datos
                )
            );
            return $resultado->getModifiedCount();
		}

		
        public function eliminar($usuario_id){
            
            $resultado = $this->db->findOneAndDelete(array(
                "_id" =>  $this->mongodb->getObjetId($usuario_id)
            ));
           return $resultado;
        }

      
    }

