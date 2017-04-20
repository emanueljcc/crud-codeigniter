<?php 
	/**
	* 
	*/
	class Model_Usuario extends CI_Model{
		
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
	

		//funcion de select en SQL

		public function selPerfil(){
			$query = $this->db->query("SELECT * FROM perfil");
			//retornamos todos los registros de la tabla
			return $query->result();
		}


		public function insertUsuario($perfil, $nombre,$apellido,$correo,$telefono){

			$arrayDatos = array(
				'per_id'=>$perfil,
				'usu_nombres'=>$nombre,
				'usu_apellidos'=>$apellido,
				'usu_correo'=>$correo,
				'usu_telefono'=>$telefono,
			);

			$this->db->insert('usuario',$arrayDatos); // funcion defecto codeigniter

		}

		public function selUsuario(){
			$query = $this->db->query("
			
				SELECT * FROM usuario u 
				JOIN perfil p on u.per_id = p.per_id 

			");
			//retornamos todos los registros de la tabla
			return $query->result();
		}

		public function actualizarUsuario($id){
			$query = $this->db->query("
				SELECT * FROM usuario u 
				JOIN perfil p on u.per_id = p.per_id
				WHERE usu_id = $id
			");
			return $query->result();
		}

		public function delete($id){

			$this->db->where('usu_id',$id);
			$this->db->delete('usuario');			

		}

		public function updateUsuario($perfil,$textusuid,$nombre,$apellido,$correo,$telefono){

			$arrayDatos = array(
				'per_id'=>$perfil,
				'usu_nombres'=>$nombre,
				'usu_apellidos'=>$apellido,
				'usu_correo'=>$correo,
				'usu_telefono'=>$telefono,
			);
			$this->db->where('usu_id',$textusuid);
			$this->db->update('usuario',$arrayDatos);

		}



	}
 ?>