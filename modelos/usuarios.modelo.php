<?php

require_once "conexion.php";

class ModeloUsuarios{
    //MOSTRAR USUARIOS
    static public function mdlMostrarUsuarios($tabla, $item, $valor){
        $stmt = Conexion::conectar()->prepare("SELECT * from $tabla where $item = :$item");
        $stmt -> bindparam(":".$item, $valor, PDO::PARAM_STR);
        $stmt -> execute();
        return $stmt -> fetch();
        $stmt -> close();
        $stmt = null;
    }


    // REGISTRO DE USUARIOS
    static public function mdlIngresarUsuario($tabla, $datos){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombres_usuario, user_usuario, pass_usuario, perfil_usuario) VALUES (:nombres_usuario, :user_usuario, :pass_usuario, :perfil_usuario)");
        
        $stmt->bindParam(":nombres_usuario", $datos["nombres_usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":user_usuario", $datos["user_usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":pass_usuario", $datos["pass_usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":perfil_usuario", $datos["perfil_usuario"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        }else {
            return "error";
        }

        $stmt->close();
        $stmt=null;
    }
}