<html>
<head><title>DatosCliente</title></head>
<body>
<form name = "input" aaction=<?php echo "actualizar.php?id=". $_GET["id"];?> method="POST">
<?php
$id=$_GET["id"];
$con = mysql_connect("10.2.1.178", "tecnicas", "tecnicas");
mysql_select_db("tecnicasavanzadas", $con);
$result = mysql_query("SELECT * FROM tbl_clients where id = ". $id);
$row = mysql_fetch_array($result);

	echo "<p>Nombre: ". $row['client'] . " </p>";
	echo "<p>Telefono: ". $row['phone'] . " </p>";
	echo "<p>Direccion: ". $row['adress'] . " </p>";
	echo "<p>Observaciones: ". $row['observations'] . " </p>";
	echo "<p>Sexo: ". $row['sex'] . " </p>";
	
mysql_close($con);
?>

<input type = "submit" value = "Editar informacion">
</form>
</body>
</html>
