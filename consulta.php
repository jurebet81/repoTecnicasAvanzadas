<?php

//conexion BD
$host = "10.2.1.178";   
$usuario = "tecnicas";   
$clave = "tecnicas";  
$bd = "tecnicasavanzadas";  
$connect= mysql_connect ($host, $usuario, $clave);   
// seleccion BD  
mysql_select_db ( $bd, $connect );   
  
// definimos la consulta  
$query =    "SELECT * FROM tbl_clients ORDER BY client";
// hacemos la consulta  
$clientsQuery = mysql_query ($query, $connect) or die (mysql_error());
$clients = array();
while($client = mysql_fetch_array($clientsQuery)){
	$clients[] = $client;
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<body>

<h1>CONSULTA</h1>
<table border="1">
<tr>
  <th>Cliente</th>
  <th>Telefono</th>
  <th>Direccion</th>
  <th>Observacion</th>
  <th>Sexo</th>
  <th>Ver</th>
  <th>Eliminar</th>
</tr>
<?php
	foreach($clients as $client){
		echo "<tr>";
			echo "<td>".$client["client"]."</td>";
			echo "<td>".$client["phone"]."</td>";
			echo "<td>".$client["adress"]."</td>";
			echo "<td>".$client["observations"]."</td>";
			echo "<td>".$client["sex"]."</td>";
			echo "<td><a href='ver-cliente.php?id=".$client["id"]."'>Ver</a></td>";
			echo "<td><a href='borrar-cliente.php?id=".$client["id"]."'>Eliminar</a></td>";
		echo "</tr>";
	}
?>
</table>

<hd><a href='index.html'>Volver</a></hd>
</body>
</html>