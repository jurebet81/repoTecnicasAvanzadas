<html>
<head><title>DatosCliente</title></head>
<body>
<form name = "input" action="clientes.php" method="POST">
<?php
$id=$_GET["id"];
//$id = 2;
$con = mysql_connect("10.2.1.178", "tecnicas", "tecnicas");
//$con = mysql_connect("localhost", "root", "juli");
mysql_select_db("tecnicasavanzadas", $con);
$result = mysql_query("SELECT * FROM tbl_clients where id = ". $id);
//while ($row = mysql_fetch_array($result)){
	$row = mysql_fetch_array($result);
	echo "<p>Nombre: ". $row['client'] . " </p>";
	echo "<p>Telefono: ". $row['phone'] . " </p>";
	echo "<p>Direccion: ". $row['adress'] . " </p>";
	echo "<p>Observaciones: ". $row['observations'] . " </p>";
	echo "<p>Sexo: ". $row['sex'] . " </p>";
	

//}
mysql_close($con);
?>
<!--
<p>Nombre:<input type= "text" name = "nombre"> </p>
<p>Telefono:<input type= "text" name = "phone"> </p>
<p>Direccion: <input type= "text" name = "address"> </p>
<p>Observaciones: <input type = "textarea" name "obs"></p>
<p>Sexo: Masculino<input type = "radio" name= "sex" value = "male">
Femenino<input type="radio" name = "sex" value ="female" ></p>
-->
<input type = "submit" value = "Actualizar Datos">

</form>
</body>
</html>
