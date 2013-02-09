<<<<<<< HEAD
<html>
<head><title>DatosCliente</title></head>
<body>
<form name = "input" action="actualizar.php" method="POST">
<?php
//$id=$_GET["id"];
//$id = 2;
$con = mysql_connect("10.2.1.178", "tecnicas", "tecnicas");
//$con = mysql_connect("localhost", "root", "juli");
mysql_select_db("tecnicasavanzadas", $con);
$result = mysql_query("SELECT * FROM tbl_clients where id = 7");
while ($row = mysql_fetch_array($result)){

	echo $row['client'];

}
mysql_close($con);
?>

<p>Nombre:<input type= "text" name = "nombre"> </p>
<p>Telefono:<input type= "text" name = "phone"> </p>
<p>Direccion: <input type= "text" name = "address"> </p>
<p>Observaciones: <input type = "textarea" name "obs"></p>
<p>Sexo: Masculino<input type = "radio" name= "sex" value = "male">
Femenino<input type="radio" name = "sex" value ="female" ></p>
<input type = "submit" value = "Actualizar Datos">
</form>
</body>
</html>
=======
<?php

$connect = mysql_connect("10.2.1.178", "tecnicas", "tecnicas");
mysql_select_db("tecnicasavanzadas", $connect) or die("algo anda nmal");
$id = $_get["id"]
$query = 'select * from tbl_clients where id = '.$id.'';
$result = mysql_query($query);
$cliente = mysql_fetch_array($result);
//echo "<td>" . $row['client'] . "</td>";
//while ($row = mysql_fetch_array($result)){
//echo $row['client'];
?>
<html>
<body>

<form action="construction.php" method="post">
Nombre: <?php echo $cliente['client'] ?></br>
</br>
Tel&eacute;fono: <?php echo $cliente['phone'] ?> </br>
</br>
Direcci&oacute;n: <?php echo $cliente['adress'] ?></br>
</br>
Observaciones:<?php echo $cliente['observations'] ?></br>
</br>
Sexo:</br>
</br>
<input type="submit" value="Actualizar">
</form>



</body>
</html>
>>>>>>> 4b3a20d26bd886af3bee8a3caf3975e4c730594e
