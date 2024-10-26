<?php
class conectar {
    protected $dbh; 
    public function conexion (){
        try{
            $conectar = $this->dbh = new PDO (
                "mysql:local=localhost:8081;dbname=api", "root", "");
            return $conectar;
        }
        catch (Exception $e){
            print "Error en la BD" . $e->getMessage().
            "<br>";
            die();
        }
    }
    public function  set_names(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }
}
?>