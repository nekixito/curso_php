<?php 
try{

	$id = $_GET['id'];

	//El usuario puede inyectar código
	$conexion=new PDO('mysql:host=localhost;dbname=prueba_datos','root','');
	//echo "Conexión OK";

	$resultados = $conexion->query("SELECT * FROM usuarios WHERE id=$id");

	foreach ($resultados as $fila) {
		echo $fila['nombre'].'<br>';
	}

}catch(PDOException $e){
	echo "Error: "+$e->getMessage();
}



 ?>