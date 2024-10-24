<?php
class categoria extends conectar {
    public function get_Categoria(){
        $conectar= parent::conexion();
        parent::set_names();
        $sql= "SELECT * FROM categoria WHERE est=1";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function get_categoria_x_id($cat_id){
        $conectar= parent::Conexion();
        parent::set_names();
        $sql="SELECT * FROM categoria WHERE est=1 and cat_id= ?";
        $sql=$conectar->prepare($sql);
        $sql->binValue(1, $cat_id);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>