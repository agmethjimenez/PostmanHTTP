<?php
class Consignacion extends Conexion{
    public function getconsignacion(){
        $conectar= parent::Conectar();
        parent::set_names();
        $sql = "SELECT*FROM consignacion";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultados =$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getconsignacion_x_id($cat){
        $conectar= parent::Conectar();
        parent::set_names();
        $sql = "SELECT*FROM consignacion WHERE ID_consignacion = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat);
        $sql->execute();
        return $resultados =$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
class Usuarios extends Conexion{
    public function getconsignacion(){
        $conectar= parent::Conectar();
        parent::set_names();
        $sql = "SELECT*FROM usuarios";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultados =$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getconsignacion_x_id($cat){
        $conectar= parent::Conectar();
        parent::set_names();
        $sql = "SELECT*FROM usuarios WHERE ID = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat);
        $sql->execute();
        return $resultados =$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function postusuarios($ID,$name1,$name2,$numero,$direccion){
        $conectar= parent::Conectar();
        parent::set_names();
        $sql = "INSERT INTO usuarios VALUES(?,?,?,?,?)";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $ID);
        $sql->bindValue(2, $name1);
        $sql->bindValue(3, $name2);
        $sql->bindValue(4, $numero);
        $sql->bindValue(5, $direccion);
        $sql->execute();
        return $resultados =$sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>