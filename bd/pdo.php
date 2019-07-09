<?php 

$id = $_GET['id'];

try{

	

	//El usuario puede inyectar código
	$conexion=new PDO('mysql:host=localhost;dbname=prueba_datos','root','');
	//echo "Conexión OK";

	//Método query
	/*
	$resultados = $conexion->query("SELECT * FROM usuarios WHERE id=$id");
	foreach ($resultados as $fila) {
		echo $fila['nombre'].'<br>';
	}
	*/

	/*
		$statement = $conexion -> prepare('INSERT INTO usuarios VALUES (null,"José")');
		$statement -> execute();

	*/


	//Prepared Statements
	
	$statement -> execute(
					array(':id'=>$id)
					);
	
	$resultados =$statement -> fetchAll();

	foreach ($resultados as $usuario) {
		echo $usuario['nombre'].'<br>';
	}
	


	/*
	echo '<pre>';
	print_r($resultados);
	echo '</pre>';
	*/

}catch(PDOException $e){
	echo "Error: "+$e->getMessage();
}



 ?>