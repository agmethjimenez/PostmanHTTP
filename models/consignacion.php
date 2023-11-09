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
    public function postconsignacion($user,$fecha,$consig){
        $conectar= parent::Conectar();
        parent::set_names();
        $sql = "INSERT INTO consignacion VALUES('',?,?,?)";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $user);
        $sql->bindValue(2, $fecha);
        $sql->bindValue(3, $consig);
        $sql->execute();
        return $resultados =$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function putconsignacion($user,$fecha,$consig,$id_consig){
        $conectar= parent::Conectar();
        parent::set_names();
        $sql = "UPDATE consignacion SET usuario = ?, fecha_hora = ?, consignacion = ? WHERE ID_consignacion = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $user);
        $sql->bindValue(2, $fecha);
        $sql->bindValue(3, $consig);
        $sql->bindValue(4, $id_consig);
        $sql->execute();
        return $resultados =$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function deleteconsignacion($id){
        $conectar= parent::Conectar();
        parent::set_names();
        $sql = "DELETE FROM consignacion WHERE ID_consignacion = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $id);
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
    public function putUsers($ID,$name1,$name2,$numero,$direccion){
        $conectar= parent::Conectar();
        parent::set_names();
        $sql = "UPDATE usuarios SET nombre = ?, apellido = ?, numero = ?, direccion = ? WHERE ID = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $name1);
        $sql->bindValue(2, $name2);
        $sql->bindValue(3, $numero);
        $sql->bindValue(4, $direccion);
        $sql->bindValue(5, $ID);
        $sql->execute();
        return $resultados =$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function deleteUsers($ID){
        $conectar= parent::Conectar();
        parent::set_names();
        $sql = "DELETE FROM usuarios WHERE ID = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $ID);
        $sql->execute();
        return $resultados =$sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
