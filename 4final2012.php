<?
$link = mysql_connect("mysql5.000webhost.com", "a6493246_hugix4", "unamcglhugix4");
mysql_select_db("a6493246_alumnos",$link);
$sql = "select * from Final_ENP_cuarto_2012 where Plantel='$_POST[Plantel]' && Grupo='$_POST[Grupo]'";
$sql = mysql_query($sql) or die("Revise nuevamente los datos ingresados");

echo "<body bgcolor='#050a2f'>";
echo"<style type='text/css'>
  p {
	font-family:Century Gothic, sans-serif;
	font-size:12px;
    color: #b79d49;
    }

	p4{
	font-family:Century Gothic, sans-serif;
	font-size:12px;
    color: #000;
	}
	
  </style>";
echo "</br><p align='center'>Los n&uacute;meros de los resultados que aparecen abajo, muestran los paquetes did&aacutecticos que debes consultar de acuerdo a tu nivel.</p></br>";
echo "<p4 align='center'><li><a href='paqt.html'>Paquetes Did&aacute;cticos</a></li></br></p4>";
//echo "<p align='center'</br>&quot;Let's Go To San Antonio&quot;</p>";
echo "<table border='1' align='center' width='110%' cellpadding='1'>
<tr align='center'>		
		<td width='65'><p><b>#Cuenta</b></td>
		<td width='65'><p><b>Grupo</b></td>
		<td width='65'><p><b>Nombre</b></td>
		<td width='65'><p><b>Diagnostico inicial 2012</b></td>
		<td width='65'><p><b>Diagnostico final 2012</b></td>
		
</tr>";

while($row = mysql_fetch_array($sql))
{
echo "<table border='1' align='center' width='110%' cellpadding='1'>
<tr align='center'>
	<td width='65'><p>".$row["Cuenta"]."</td>
	<td width='65'><p>".$row["Grupo"]."</td>
	<td width='65'><p>".$row["Name"]."</td>
	<td width='65'><p>".$row["Rinicial"]."</td>
	<td width='65'><p>".$row["Rfinal"]."</td>
	
</tr>";
}

echo"</body>";
?>