<?php

class Conexion{
    //FUNCIÓN PARA CONECTAR A BASE DE DATOS
	static public function conectar(){

		//LOCALHOST 
		$link = new PDO("mysql:host=localhost;dbname=klmedic","root","kreatiflab");

		//Network Solutions 
		//$link = new PDO("mysql:host=vuxmysql11;dbname=klmedic","klmedic","KreatifL@b2024");
		
		$link->exec("set names utf8");

		return $link;

	}

}





