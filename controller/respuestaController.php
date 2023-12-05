<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    class respuestaController {
        private $model;
        
        public function __construct() {
            include_once ($_SERVER['DOCUMENT_ROOT'].'/ProyectoQS-main-V3/routes.php');
            require_once(MODEL_PATH.'respuestaModel.php');
            $this->model = new respuestaModel();
        }

        public function insertarRespuesta($descripcion) {
            // Obtén el valor de id de la URL
            $idFromURL = isset($_GET['id']) ? $_GET['id'] : null;
    
            // Llama a la función insertar del modelo y pasa los datos
            $idInsertado = $this->model->insertar($descripcion, $idFromURL);
            if ($idInsertado) {
                // Inserción exitosa, redirige a la página principal
                header('location: ./index2.php');
            } else {
                // La inserción falló, redirige a la página de creación con un mensaje de error
                header('location: ./create.php?error=1');
            }
        }
        public function select(){
            return ($this->model->listar()) ? $this->model->listar() : false;
        }

        public function select_resp(){
            return ($this->model->listar_resp()) ? $this->model->listar_resp() : false;
        }

        public function combolistI() {
            return ($this->model->cargarDesplegableI()) ? $this->model->cargarDesplegableI() : false;
        }
               
    }