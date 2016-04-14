<?
//echo "Grupo='$_POST[grupo]' y Plantel='$_POST[plantel]' y Rfc='$_POST[rfc]' y Opcion= $_POST[numplantel]";
$link = mysql_connect("mysql6.000webhost.com", "a6831370_hugi1", "h0lamund0");
mysql_select_db("a6831370_exa5",$link);
$sql = "select * from resulta where Grupo='$_POST[grupo]' and Plantel=$_POST[numplantel]";//Rfc='$_POST[rfc]'
$sql2 = "select * from resulta where Grupo='$_POST[grupo]' and Plantel=$_POST[numplantel]";//Rfc='$_POST[rfc]'
$sql = mysql_query($sql) or die("No se pudo realizar la consulta");
$sql2 = mysql_query($sql2) or die("No se pudo realizar la consulta");

$row1 = mysql_fetch_array($sql2);

echo "<body bgcolor='#050a2f'>";
echo"<style type='text/css'>
  p {
	font-family:Century Gothic, sans-serif;
	font-size:18px;
    color: #b79d49;
    }
  </style>";

echo "<table border='2' align='center' width='400' cellpadding='10'>
<tr align='center'>
	<td width='200'><p>Plantel: ".$row1['Plantel']."</td>
	<td width='200'><p>Grupo: ".$row1['Grupo']."</td>
</tr>
";

echo "<table border='2' align='center' width='1000' cellpadding='10'>
<tr align='center'>
		<td width='100'><p>#Cuenta<br></td>
		<td width='200'><p>Nombre</td>
		<td width='100'><p>P. Total</td>
		<td width='100'><p>P. Listening</td>
		<td width='100'><p>P. Grammar</td>
		<td width='100'><p>P. Reading</td>
</tr>";


while($row = mysql_fetch_array($sql))
{
echo "<table border='2' align='center' width='1000' cellpadding='10'>
<tr align='center'>
	<td width='100'><p>".$row['Cuenta']."</td>
	<td width='200'><p>".$row['Nombre Alumno']."</td>
	<td width='100'><p>".$row['Total']."</td>
	<td width='100'><p>".$row['Listening']."</td>
	<td width='100'><p>".$row['Grammar']."</td>
	<td width='100'><p>".$row['Reading']."</td>
</tr>
";

/*echo "Cuenta: ".$row['Cuenta']."<br>";
echo "Alumno: ".$row['Nombre Alumno']."<br>";
echo "Promedio Final: ".$row['Total']."<br>";
echo "Promedio Listening: ".$row['Listening']."<br>";
echo "Promedio Grammar: ".$row['Grammar']."<br>";
echo "Promedio Reading: ".$row['Reading']."<br>";*/
}
echo"</body>";
?>