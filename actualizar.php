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