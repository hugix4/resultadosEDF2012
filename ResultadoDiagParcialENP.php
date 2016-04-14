<?
$link = mysql_connect("mysql6.000webhost.com", "a6831370_hugi1", "h0lamund0");
mysql_select_db("a6831370_exa5",$link);
$sql = "select * from ExDiagParcialPrimeros where Grupo='$_POST[Grupo]' and Plantel='$_POST[Plantel]'";
$sql = mysql_query($sql) or die("Al parecer no reuniste todos los lineamientos, lo sentimos");
//echo "@media print{body{font size: 10pt}}";
echo "<body bgcolor='#050a2f'>";
echo"<style type='text/css'>
  p {
	font-family:Century Gothic, sans-serif;
	font-size:12px;
    color: #b79d49;
    }
  </style>";
echo "<p align='center'><b>Coordinaci&oacute;n General de Lenguas UNAM</b></p>";
echo "<p align='left'>Interpretaci&oacute;n de los resultados del examen diagn&oacute;stico parcial</br>La siguiente tabla indica si los alumnos tienen un conocimiento suficiente de los temas centrales correspondientes las primeras tres unidades de cada programa de acuerdo con su desempe&ntilde;o en el examen diagn&oacute;stico.</br>Los encabezados indican cada uno de los contenidos evaluados en el examen. Si el conocimiento del alumno es suficiente, aparece un &quot;SI&quot; en caso contrario aparece la leyenda &quot;NO&quot;.</br>La &uacute;ltima columna, llamada &quot;Resultado&quot;, indica si el desempe&ntilde;o del alumno fue satisfactorio o no con relaci&oacute;n a los aprendizajes planteados en las primeras tres unidades del programa.</p></br>";
echo"<p align='center'> <b>Grupo: $_POST[Grupo]</b></p>";
echo "<table border='.1' align='center' width='110%' cellpadding='1'>
<tr align='center'>		
		<td width='65'><p><b>#Cuenta</b></td>
		<td width='200'><p><b>Nombre</b></td>
		<td width='45'><p><b>Articles</b></td>
		<td width='85'><p><b>Demonstrative adjectives</b></td>
		<td width='65'><p><b>Imperative</b></td>
		<td width='40'><p><b>To be</b></td>
		<td width='60'><p><b>Personal pronouns</b></td>
		<td width='70'><p><b>Possessive adjectives</b></td>
		<td width='90'><p><b>Possessive nouns & family</b></td>
		<td width='45'><p><b>Have /has</b></td>
		<td width='50'><p><b>Simple present</b></td>
		<td width='60'><p><b>WH questions</b></td>
		<td width='100'><p><b>Listening(spelling and numbers)</b></td>
		<td width='80'><p><b>Listening (descriptions)</b></td>
		<td width='50'><p><b>Reading</b></td>
		<td width='110'><p><b>Resultado</b></td>
</tr>";

while($row = mysql_fetch_array($sql))
{
echo "<table border='.1' align='center' width='110%' cellpadding='1'>
<tr align='center'>
	<td width='65'><p>".$row["Cuenta"]."</td>
	<td width='200'><p>".$row["Name"]."</td>
	<td width='45'><p>".$row["Articles"]."</td>
	<td width='85'><p>".$row["Demonstrative adjectives"]."</td>
	<td width='65'><p>".$row["Imperative"]."</td>
	<td width='40'><p>".$row["To be"]."</td>
	<td width='60'><p>".$row["Personal pronouns"]."</td>
	<td width='70'><p>".$row["Possessive adjectives"]."</td>
	<td width='90'><p>".$row["Possessive nouns & family"]."</td>
	<td width='45'><p>".$row["Have/has"]."</td>
	<td width='50'><p>".$row["Simple present"]."</td>
	<td width='60'><p>".$row["WH-questions"]."</td>
	<td width='100'><p>".$row["Listening (spelling and numbers)"]."</td>
	<td width='80'><p>".$row["Listening (descriptions)"]."</td>
	<td width='50'><p>".$row["Reading"]."</td>
	<td width='110'><p>".$row["Resultado"]."</td>
</tr>";
}

echo"</body>";
?>