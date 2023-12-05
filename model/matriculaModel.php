<?php
    class matriculaModel {
        private $PDO;
        
        public function __construct(){
            include_once ($_SERVER['DOCUMENT_ROOT'].'/ProyectoQS-main-V3/routes.php');
            require_once(DAO_PATH.'database.php');
            $data = new dataConex();
            $this->PDO = $data->conexion();
        }

        public function insertar($fecha,$idEstudiante,$idCurso,$idUsuario) {
            $sql = 'INSERT INTO matriculas VALUES (0,:fecha,:idEstudiante,:idCurso,:idUsuario)';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':fecha',$fecha);
            $statement->bindParam(':idEstudiante',$idEstudiante);
            $statement->bindParam(':idCurso',$idCurso);
            $statement->bindParam(':idUsuario',$idUsuario);
            $statement->execute();
            return ($this->PDO->lastInsertId());
        }

        public function actualizar($idMatricula,$fecha,$idEstudiante,$idCurso,$idUsuario) {
            $sql = 'UPDATE matriculas SET fecha=:fecha,idEstudiante=:idEstudiante,idCurso=:idCurso,idUsuario=:idUsuario WHERE idMatricula=:idMatricula';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':fecha',$fecha);
            $statement->bindParam(':idEstudiante',$idEstudiante);
            $statement->bindParam(':idCurso',$idCurso);
            $statement->bindParam(':idUsuario',$idUsuario);
            $statement->bindParam(':idMatricula',$idMatricula);
            return ($statement->execute()) ? true : false;
        }

        public function eliminar($idMatricula) {
            $sql = 'DELETE FROM matriculas WHERE idMatricula=:idMatricula';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':idMatricula',$idMatricula);
            return ($statement->execute()) ? true : false;
        }

        public function listar() {
            $sql = 'SELECT m.idMatricula,m.fecha,e.nombre,e.apellido,m.idEstudiante,c.nombre curso,m.idCurso,u.alias usuario,m.idUsuario
            FROM matriculas m  join estudiantes e on m.idEstudiante=e.idEstudiante
            join cursos c on m.idCurso=c.idCurso join usuarios u on m.idUsuario=u.idUsuario
            ORDER BY m.idMatricula DESC';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

        public function cargardesplegable() {
            $sql = 'SELECT idEstudiante,nombre FROM estudiantes ORDER BY idEstudiante ASC';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

        public function cargardesplegableC() {
            $sql = 'SELECT idCurso,nombre FROM cursos ORDER BY idCurso ASC';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

        public function cargardesplegableU() {
            $sql = 'SELECT idUsuario,alias FROM usuarios ORDER BY idUsuario ASC';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

        public function buscar($idMatricula) {
            $sql = 'SELECT m.idMatricula,m.fecha,e.nombre,e.apellido,m.idEstudiante,c.nombre curso,m.idCurso,u.alias usuario,m.idUsuario
            FROM matriculas m  join estudiantes e on m.idEstudiante=e.idEstudiante
            join cursos c on m.idCurso=c.idCurso join usuarios u on m.idUsuario=u.idUsuario WHERE idMatricula =: idMatricula';
            $statement = $this->PDO->prepare($sql);
            $statement->bindParam(':idMatricula',$idMatricula);
            return ($statement->execute()) ? $statement->fetch() : false;
        }
    }