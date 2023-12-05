<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    class formularioController{
        private $model;
        
        public function __construct() {
            include_once ($_SERVER['DOCUMENT_ROOT'].'/ProyectoQS-main-V3/routes.php');
            require_once(MODEL_PATH.'formularioModel.php');
            $this->model = new formularioModel();
        }

    public function insert($otros_datos,$mensaje,$fecha,$idcarreras,$id_secciones,$id_tipo,$id_user) {
        $id = $this->model->insertar($otros_datos,$mensaje,$fecha,$idcarreras,$id_secciones,$id_tipo,$id_user);
        return ($id!=false) ? header('location: ./indext.php') : header('location: ./create.php');
    }
        public function select(){
            return ($this->model->listar()) ? $this->model->listar() : false;
        }

        public function selectformulario(){
            return ($this->model->listarformulario()) ? $this->model->listarformulario() : false;
        }


        public function combolist() {
            return ($this->model->cargarDesplegable()) ? $this->model->cargarDesplegable() : false;
        }

        public function combolistS() {
            return ($this->model->cargardesplegableS()) ? $this->model->cargardesplegableS() : false;
        }

        public function combolistT() {
            return ($this->model->cargardesplegableT()) ? $this->model->cargardesplegableT() : false;
        }

        public function combolistU() {
            return ($this->model->cargardesplegableU()) ? $this->model->cargardesplegableU() : false;
        }
        
    }
?>