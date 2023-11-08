<?php
class Conexion{
    protected $dbh;
    protected function Conectar(){
       try {
        $conectar = $this->dbh = new PDO("mysql:host=localhost;dbname=consig","root","");
        return $conectar;
       } catch (Exception $e) {
        print "Error DB: " . $e->getMessage() . "</br>";
       }

    }

    public function set_names(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }
    public function ruta(){
        return "http://localhost/consumoPOSTMAN/";
    }
}

?>