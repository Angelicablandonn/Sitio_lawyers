<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Abogados_model extends CI_Model {

        
		function __construct(){
            //cargar la clase que se extiende CI_model
			parent::__construct();
            
			$this->load->library("mongodb");
			$this->db = $this->mongodb->db()->abogado;
		}

        public function listar(){
            //se buscan los datos, se obtienen todos los datos
            // Mostrar todos los datos
            // un arreglo de datos 
            return $this->db->find(array());
        }

        public function autenticar($correo, $clave){
            //1 controlar el error
            try {
                //2 buscar un registro por el indice
                $resultado = $this->db->findOne(array(
                    'correo' => $correo,
                ));

                return $resultado;
             //capturar errores 
            } catch (\MongoDB\Driver\Exception\InvalidArgumentException $th) {
                return null;
            }
        }

        public function buscar($abogado_id){
            try {
                $resultado = $this->db->findOne(array(
                  '_id'  =>  $this->mongodb->getObjetId($abogado_id)
                ));
                return $resultado;
            //capturar errores 
            } catch (\MongoDB\Driver\Exception\InvalidArgumentException $th) {
                return null;
            }
        }

        //funcion para guardar los datos
		function agregar($abogado){
            $resultado = $this->db->insertOne($abogado);
            if($resultado->getInsertedCount() > 0){
                return array(
                    "guardado" => true,
                    "abogado_id" => $resultado->getInsertedId()
                );
            }else{
                return array("guardado" => false);
            }
		}

		function editar($abogado_id, $datos){
			$resultado = $this->db->updateOne(
                array(
                    "_id" =>  $this->mongodb->getObjetId($abogado_id)
                ),
                array(  
                    '$set' => $datos
                )
            );
            return $resultado->getModifiedCount();
		}

		
        public function eliminar($abogado_id){
            
            $resultado = $this->db->findOneAndDelete(array(
                "_id" =>  $this->mongodb->getObjetId($abogado_id)
            ));
           return $resultado;
        }

        function nombre_imagen($correo, $nombre_archivo){
			$resultado = $this->db->updateOne(
                array(
                    "Correo" =>  $correo
                ),
                array(  
                    '$set' =>   ['imagen' => $nombre_archivo]
                )
            );
            return $resultado->getModifiedCount();
		}


    }