<?php
$connect = mysql_connect("10.2.1.178", "tecnicas", "tecnicas");
mysql_select_db("tecnicasavanzadas", $connect) or die("algo anda nmal");
$id = $_GET["id"];
$query = 'delete from tbl_clients where id = '.$id;
$result = mysql_query($query);
//$cliente = mysql_fetch_array($result);
//echo "<td>" . $row['client'] . "</td>";
//while ($row = mysql_fetch_array($result)){
//echo $row['client'];
$query2 = 'select id from tbl_clients where id = '.$id;
$result2 = mysql_query($query2);
$cliente = mysql_fetch_array($result2);
if ($cliente < 1){
echo "El Registro ha sido eliminado satisfactoriamente";
}
?>
<html>
<body>

<form action="consulta.php" >

<input type="submit" value="volver">
</form>



</body>
</html>