<html>
<head>
<title>Cliente</title>
</head>
<body>
	<?php 
	// linea con redireccion luego de ejecutar la consulta
	//header ("location: formulario-php-mysql.php#fcomentario");
	if(isset($_POST["name"])){
		$name=$_POST["name"];
		$telephone=$_POST["telephone"];
		$address=$_POST["address"];
		$observations=$_POST["observations"];
		$sex=$_POST["sex"];
		//conectamos a la base
		$host = "10.2.1.178";   
		$usuario = "tecnicas";   
		$clave = "tecnicas";  
		$bd = "tecnicasavanzadas";  
		$connect=mysql_connect ($host, $usuario, $clave);  
		// seleccionamos la base 
		mysql_select_db ( $bd, $connect );  

		// definimos la consulta
		$sql = "INSERT INTO tbl_clients (client,phone,adress,observations,sex) ";
		$sql.= "VALUES ('".$name."', '".$telephone."', '".$address."','".$observations."','".$sex."')";
			
		// hacemos la consultay
		mysql_query ($sql, $connect) or die (mysql_error());
		echo "El usuario ".htmlentities($_POST["name"])." ha sido guardado exitosamente";
	}else{
	
	?>
	<form action="" method="POST">
	 <p>Nombre: <input type="text" name="name" /></p>
	 <p>Telefono: <input type="text" name="telephone" /></p>
	 <p>Direccion: <input type="text" name="address" /></p>
	 <p>Observaciones: <textarea name="observations"></textarea></p>
	 <input type="radio" name="sex" value="M"> M
	 <input type="radio" name="sex" value="F"> F<br>
	 <input type="submit" value="Guardar"><br>
	</form>
	<?php } ?>
	<hd><a href='index.php'>Ver Cliente</a>";VOLVER</hd>
</body>
 
</html>// seleccionamos la base 
mysql_select_db ( $bd, $connect );  

// definimos la consulta
$sql = "INSERT INTO clients (client,phone,adress,observations,sex) ";
$sql.= "VALUES ('".$name."', '".$telephone."', '".$address."','".$observations."','".$sex."')";
	
// hacemos la consulta
mysql_query ($sql, $connect) or die (mysql_error());
?>
 
</html>