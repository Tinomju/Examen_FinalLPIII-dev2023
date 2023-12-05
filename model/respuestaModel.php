<?php
    class respuestaModel {
        private $PDO;
        
        public function __construct(){
            include_once ($_SERVER['DOCUMENT_ROOT'].'/ProyectoQS-main-V3/routes.php');
            require_once(DAO_PATH.'database.php');
            $data = new dataConex();
            $this->PDO = $data->conexion();
        }

        public function insertar($descripcion, $idFromURL) {
            // Verifica si se proporcionó un ID en la URL
            if (!is_null($idFromURL)) {
                $sql = 'INSERT INTO respuestas VALUES (0, :descripcion, :id)';
                $statement = $this->PDO->prepare($sql);
                $statement->bindParam(':descripcion', $descripcion);
                $statement->bindParam(':id', $idFromURL);
                $statement->execute();
                return $this->PDO->lastInsertId();
            } else {
                // Manejar el caso donde no se proporcionó un ID en la URL
                return false;
            }
        }
        public function listar() {
            $sql = 'SELECT * FROM item ORDER BY id DESC';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

        public function listar_resp() {
            $sql = 'SELECT * FROM respuestas ORDER BY idrespuesta DESC';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

        public function cargardesplegableI() {
            $sql = 'SELECT id,otros_datos FROM item ORDER BY id ASC';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

    }