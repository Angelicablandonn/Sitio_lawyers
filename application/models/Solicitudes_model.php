<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitudes_model extends CI_Model {

 function __construct() {
        parent::__construct();
        $this->load->library("mongodb");
        $this->db=$this->mongodb->db()->solicitudes;
    } 
    public function buscar($solicitud_id){
        try{
            $result= $this->db->findOne(array(
                '_id'  =>  $this->mongodb->getObjetId($solicitud_id)
               
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
    public function listarrecibida(){
        try {
            $resultado = $this->db->find(array(
                'Estado' => 'Recibida',
            ));

            
            return $resultado;
        //capturar errores 
        } catch (\MongoDB\Driver\Exception\InvalidArgumentException $th) {
            return null;
        }
    }
    public function listarenproceso(){
        try {
            $resultado = $this->db->find(array(
                'Estado' => 'En proceso',
            ));

            
            return $resultado;
        //capturar errores 
        } catch (\MongoDB\Driver\Exception\InvalidArgumentException $th) {
            return null;
        }
    }
    public function listarresuelto(){
        try {
            $resultado = $this->db->find(array(
                'Estado' => 'Resuelto',
            ));

            
            return $resultado;
        //capturar errores 
        } catch (\MongoDB\Driver\Exception\InvalidArgumentException $th) {
            return null;
        }
    }
  function agregar($solicitudes){
        $result = $this->db->insertOne($solicitudes);
        if($result->getInsertedCount()>0){
            return array("guardado"=> true, "solicitud_id"=> $result->getInsertedId());
          
          } 
           else{
               return array ("guardado"=> false);

            }
        }




        function editar($solicitud_id, $datos){
			$resultado = $this->db->updateOne(
                array(
                    "_id" =>  $this->mongodb->getObjetId($solicitud_id)
                ),
                array(  
                    '$set' => $datos
                )
            );
            return $resultado->getModifiedCount();
		}
  public function insertDocument($file_path) {
            $data = array(
                'file_path' => $file_path,
                'uploaded_at' => date('Y-m-d H:i:s')
            );
            $this->db->insert('documents', $data);
        }
    
		
        public function eliminar($solicitud_id){
            
            $resultado = $this->db->findOneAndDelete(array(
                "_id" =>  $this->mongodb->getObjetId($solicitud_id)
            ));
           return $resultado;
        }
      
    }

