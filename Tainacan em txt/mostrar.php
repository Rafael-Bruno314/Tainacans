<?php	/*
error_reporting(0);
ini_set(“display_errors”, 0);	*/
?>

<?php

	include('class/conecta.php');
	$gmtDate = gmdate("D, d M Y H:i:s"); 
	header("Expires: {$gmtDate} GMT"); 
	header("Last-Modified: {$gmtDate} GMT"); 
	header("Cache-Control: no-cache, must-revalidate"); 
	header("Pragma: no-cache");
	header("Content-Type: text/html; charset=utf-8",true);

?>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Show All</title>
</head>

<body>

<table width="100%">
<tr>
	<td>
		<a href="cadastrar.php">Cadastrar</a> <!-- Editar aqui para    index.php  -->
	</td>
</tr>
</table>

<div class="container">

<?php 
	
	######################################################
	
	$sql = mysql_query("SELECT * FROM `conjuntos_expositivos`");	//mysql_query($sql, $conn)
	$numRegistros = mysql_num_rows($sql);
	
	$i = 1;
	echo "<h2> Conjuntos Expositivos </h2>";
	print '<table border="1">';
	if($numRegistros != 0)
	{

		 while ($query = mysql_fetch_object($sql))
		{
			echo "<tr>";
			echo "<td>";
				echo $i;
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> titulo);
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> museu);
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> tema);
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> area_do_conhecimento);
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> estrategias_museograficas);
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> interatividade);
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> entidade_modelada);
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> natureza);
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> dimensao);
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> modos_de_representacao);
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> funcao_do_modelo);
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> estrategias_de_modelagem);
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> tecnologia_digital);
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> quais_tecnologia_digital);
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> 	como_tecnologia_digital);
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> curiosidades);
			echo "</td>";
			
			echo "</tr>";
			$i++;
		}
	}
	print '</table>';
	echo "<br><br><br>";
	
	######################################################

?>
</div>
</body>
</html>