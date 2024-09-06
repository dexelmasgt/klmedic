<?php

class ControladorUsuarios{
    //METODO PARA LOGIN
    static public function ctrIngresoUsuario(){
        if (isset($_POST["ingUsuario"])) {
            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) && 
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])) {
                
                $tabla = "usuario" ; //TABLA ES LA TABLA QUE VA A IR A CONSULTAR A LA BASE DE DATOS
                $item = "user_usuario" ; //ITEM ES LA COLUMNA QUE VA A IR A BUSCAR EN LA BASE DE DATOS
                $valor = $_POST["ingUsuario"] ;

                $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

                
                if ($respuesta["user_usuario"] == $_POST["ingUsuario"] &&
                   $respuesta["pass_usuario"] == $_POST["ingPassword"]){
                    
                    $_SESSION["iniciarSesion"] = "ok";
                    echo '<script> window.location = "dashboard"; </script>';

                }else {
                    echo '<br><div class="alert alert-danger text-center">Error al ingresar, vuelve a intentarlo.</div>';
                }
            }
        }
    }

    //METODO PARA CREAR USUARIOS
    static public function ctrCrearUsuario(){
        if (isset($_POST["nuevoUser"])) {
            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoApellido"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoUser"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoPass2"])) { 

                $tabla = "usuarios";

                $datos = array("nombres_usuario" => $_POST["nuevoNombre"],
                                "user_usuario" => $_POST["nuevoUser"],
                                "pass_usuario" => $_POST["nuevoPass2"],
                                "perfil_usuario" => $_POST["nuevoRol"] );
                            
                $respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);

                if ($respuesta == "ok") {
                    echo '<script>
                    Swal.fire({
                        title: "Usuario agregado",
                        text: "El usuario se ha agregado correctamente al sistema",
                        icon: "success",
                        confirmButtonText: "Aceptar"
                    }).then((result)=>{
                        if(result.value){
                            window.location = "usuarios";
                        }
                    });
                  </script>';
                }
                
            }else {
                echo '<script>
                    Swal.fire({
                        title: "Error!",
                        text: "Ha ocurrido un error, por favor revise e intente de nuevo.",
                        icon: "error",
                        confirmButtonText: "Aceptar"
                    }).then((result)=>{
                        if(result.value){
                            window.location = "usuarios";
                        }
                    });
                  </script>';
            }
        }
    }
   
}