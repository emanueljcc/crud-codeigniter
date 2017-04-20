<?php 
	Class Usuario extends CI_Controller{




		function __construct(){
			parent::__construct();
			//asi se declara un modelo
			$this->load->model('Model_Usuario'); // conexion con model
		}


		public function index(){
			//$this->load->helper('url'); // para poder llamar base_url(); en la vista o contrtolador
			$data['contenido'] = "usuario/index"; //eniva a la plantilla (layout) esto viene siendo el section de laravel
			$data['selPerfil'] = $this->Model_Usuario->selPerfil();
			$data['selUsuario'] = $this->Model_Usuario->selUsuario();
			$this->load->view('plantilla',$data);
		}

		public function insert(){
			$datos = $this->input->post();

			if (isset($datos)) {
				$perfil = $datos['perfil'];
				$nombre = $datos['nombre'];
				$apellido = $datos['apellido'];
				$correo = $datos['correo'];
				$telefono = $datos['telefono'];
				$this->Model_Usuario->insertUsuario($perfil,$nombre,$apellido,$correo,$telefono);
				redirect(''); // vacia xq x defecto toma el index
			}
		}

		public function actualizar($id = null){
			if ($id != null) {
				$data['contenido'] = 'usuario/actualizar';
				$data['selPerfil'] = $this->Model_Usuario->selPerfil();
				$data['actualizarUsuario'] = $this->Model_Usuario->actualizarUsuario($id);
				$this->load->view('plantilla',$data);
			}else{
				redirect('');
			}
		}

		public function update(){
			$datos = $this->input->post();

			if (isset($datos)) {
				$perfil = $datos['perfil'];
				$textusuid = $datos['textusuid'];
				$nombre = $datos['nombre'];
				$apellido = $datos['apellido'];
				$correo = $datos['correo'];
				$telefono = $datos['telefono'];
				$this->Model_Usuario->updateUsuario($perfil,$textusuid,$nombre,$apellido,$correo,$telefono);
				redirect(''); // vacia xq x defecto toma el index
			}
		}

		public function eliminar($id = null){
			if ($id != null) {
				$this->Model_Usuario->delete($id);
				redirect('');
			}
		}
	}
 ?>