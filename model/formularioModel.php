<?php
    class formularioModel {
        private $PDO;
        
        public function __construct(){
            include_once ($_SERVER['DOCUMENT_ROOT'].'/ProyectoQS-main-V3/routes.php');
            require_once(DAO_PATH.'database.php');
            $data = new dataConex();
            $this->PDO = $data->conexion();
        }
        
 public function insertar($otros_datos,$mensaje,$fecha,$idcarreras,$id_secciones,$id_tipo,$id_user) {
    $sql = 'INSERT INTO item VALUES (0,:otros_datos,:mensaje,0,:fecha,:idcarreras,:id_secciones,:id_tipo,:id_user)';
    $statement = $this->PDO->prepare($sql);
    $statement->bindParam(':otros_datos',$otros_datos);
    $statement->bindParam(':mensaje',$mensaje);
    $statement->bindParam(':fecha',$fecha);
    $statement->bindParam(':idcarreras',$idcarreras);
    $statement->bindParam(':id_secciones',$id_secciones);
    $statement->bindParam(':id_tipo',$id_tipo);
    $statement->bindParam(':id_user',$id_user);
    $statement->execute();
    return ($this->PDO->lastInsertId());
}

        public function listarA() {
            $sql = 'SELECT f.id,f.otros_datos,f.mensaje,f.fecha,c.descripcion carrera,f.idcarreras,s.descripcion seccion,f.id_secciones,t.descripcion tipos,f.id_tipo,u.username,f.id_user_ FROM item f join carreras c on f.idcarreras=c.idcarreras join secciones s on f.id_secciones=s.id_secciones join tipo t on f.id_tipo=t.id_tipo join usuarios u on f.id_user=u.id_user ORDER BY f.id DESC';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }
        public function listar(){
            $statement = $this->PDO->prepare('SELECT r.idrespuesta,r.descripcion,i.otros_datos,i.mensaje,r.id FROM respuestas r join item i on r.id=i.id ORDER BY r.idrespuesta DESC');
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }
        
        public function listarformulario() {
            $sql = 'SELECT * FROM item ORDER BY id DESC';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }
        
        public function cargardesplegable() {
            $sql = 'SELECT idcarreras,descripcioncar FROM carreras ORDER BY idcarreras ASC';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

        public function cargardesplegableS() {
            $sql = 'SELECT id_secciones,descripcionsec FROM secciones ORDER BY id_secciones ASC';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

        public function cargardesplegableT() {
            $sql = 'SELECT id_tipo,descripciontip FROM tipo ORDER BY id_tipo ASC';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

        public function cargardesplegableU() {
            $sql = 'SELECT id_user,username FROM usuarios ORDER BY id_user ASC';
            $statement = $this->PDO->prepare($sql);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

}
?>