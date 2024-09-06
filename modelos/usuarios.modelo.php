<?php

require_once "conexion.php";

class ModeloUsuarios{
    //MOSTRAR USUARIOS
    static public function mdlMostrarUsuarios($tabla, $item, $valor){
        $stmt = Conexion::conectar()->prepare("SELECT * from $tabla where $item = :$item");
        $stmt -> bindparam(":".$item, $valor, PDO::PARAM_STR);
        $stmt -> execute();
        return $stmt -> fetch();
        if ($stmt) {//Aquí solo revisamos si el stmt existe, para cerrarlo.
            $stmt->close();
            $stmt = null; // Opcional
        }
    }


    // REGISTRO DE USUARIOS
    static public function mdlIngresarUsuario($tabla, $datos){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombres_usuario, nombre_usuario, pass_usuario, perfil_usuario) VALUES (:nombres_usuario, :user_usuario, :pass_usuario, :perfil_usuario)");
        
        $stmt->bindParam(":nombres_usuario", $datos["nombres_usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":nombre_usuario", $datos["nombre_usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":pass_usuario", $datos["pass_usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":perfil_usuario", $datos["perfil_usuario"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        }else {
            return "error";
        }

        if ($stmt) {//Aquí solo revisamos si el stmt existe, para cerrarlo.
            $stmt->close();
            $stmt = null; // Opcional
        }
    }
}