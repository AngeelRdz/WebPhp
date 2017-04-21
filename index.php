<?php

	class Persona{
		
		//Atributos
		public $nombre = "Angel";

		//Metodos
		public function hablar($mensaje){
			echo $mensaje;
		}
	}

	//Estamos instanciando una clase en este objeto llamada Persona
	//Creamos Objetos
	$persona = new Persona();

	//Llamamos a un atributo o metodo
	echo $persona -> nombre;

	$persona -> hablar("  Saludos desde la Ciudad de Mexico");

?>