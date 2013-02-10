<html>
<head><title>Actualizar</title></head>
<body>
<?php
	$connect = mysql_connect("localhost", "tecnicas", "tecnicas");
	mysql_select_db("tecnicasavanzadas", $connect) or die ("Imposible la conexion");
	
	if(isset($_POST['name'])){ 
	 		
	$name = $_POST["name"];	
	$phone = $_POST["phone"];
	$adress = $_POST["address"];
	$obs = $_POST["obs"];
	$sex = $_POST["sex"];
	$query = "UPDATE tbl_clients SET client = '". $name . "', phone = '". $phone;
	$query = $query .  "', adress = '". $adress ."', observations = '". $obs;
	$query = $query . "', sex = '". $sex . "' WHERE id = ". $_GET["id"];
	mysql_query($query);	
	mysql_close($connect);
	echo "Datos actualizados correctamente";	
	echo "<p><a href='index.html'>Salir</a></p>";
	
} else {
	
	$id = $_GET["id"];
	$query = "select * from tbl_clients where id = ".$id;
	$result = mysql_query($query);
	$client = mysql_fetch_array($result);	
	$name = $client["client"];	
	$phone = $client["phone"];
	$adress = $client["adress"];
	$obs = $client["observations"];
	$sex = $client["sex"];
	mysql_close($connect);
	
	echo "<form action= actualizar.php?id=" . $_GET["id"] . " method='POST'>";
	echo "<input type = 'hidden' name = 'id' value = '" . $_GET["id"] . "'>";
	echo "<p>Nombre:<input type= 'text' name = 'name' value ='" . $name . "'></p>";
	echo "<p>Telefono:<input type= 'text' name = 'phone' value ='" . $phone . "'></p>";
	echo "<p>Direccion:<input type= 'text' name = 'address' value ='" . $adress . "'></p>";
	echo "<p>Observaciones:<input type= 'text' name = 'obs' value ='" . $obs . "'> </p>";
	echo "<p>Sexo: M <input type= 'radio' name = 'sex' value = 'M' ";
	if ( $sex == 'M')
	{ 
		echo "checked"; 
	} 
	echo " >";	
	echo "F <input type= 'radio' name = 'sex' value = 'F' "; 
	if ($sex == 'F') 
	{
		echo 'checked'; 
	} 
	echo " > </p>";
	echo "<input type = 'submit' value = 'Actualizar'>";	
	echo "</form>";
}	
?>
	
</form>
</body>
</html>
