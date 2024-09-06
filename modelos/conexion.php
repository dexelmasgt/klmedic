<?php

class Conexion{
    //FUNCIÓN PARA CONECTAR A BASE DE DATOS
	static public function conectar(){

		//LOCALHOST 
		$link = new PDO("mysql:host=localhost;dbname=klmedic","root","kreatiflab");
		
		$link->exec("set names utf8");

		return $link;

	}

}





