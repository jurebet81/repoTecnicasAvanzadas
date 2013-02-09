<!DOCTYPE html>
<html>
<body>
<h1>

<?php
$search=$_POST["search"];
$con=mysql_connect("10.2.1.178", "tecnicas", "tecnicas");
if(!$con){
die("No se pudo conectar a la base de datos". mysql_error());

}
mysql_select_db("tecnicasavanzadas", $con);
$query="SELECT * FROM tbl_clients WHERE MATCH (client,phone,adress,observations) AGAINST('*" . $search . "*' IN BOOLEAN MODE)";
$results = mysql_query($query);

if(mysql_num_rows($results)!=0){

	echo "<table border='2'>


	<tr>
		<th>Cliente</th><th>Telefono</th><th>Direccion</th><th>Observaciones</th><th>Sexo</th><th>Ver</th><th>Eliminar</th>
	</tr>";

	while($row=mysql_fetch_array($results)){

	echo "<tr>";
	echo "<td>" . $row['client'] . "</td>";
	echo "<td>" . $row['phone'] . "</td>";
	echo "<td>" . $row['adress'] . "</td>";
	echo "<td>" . $row['observations'] . "</td>";
	echo "<td>" . $row['sex'] . "</td>";
	echo "<td><a href='ver-cliente.php?id=" . $row['id'] . " '>Ver</a></td>";
	echo "<td><a href='borrar-cliente.php?id=" . $row['id'] . " '>Eliminar</a></td>";
	echo "</tr>";
	}

	echo "</table>";
}else{
echo "<h4>No se han encontrado coincidencias</h4>
<td><a href='index.html'>Volver</a>";
}

mysql_close($con);

?>
</h1>
</body>
</html>