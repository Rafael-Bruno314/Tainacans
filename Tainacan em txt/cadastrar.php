

<?php
	$gmtDate = gmdate("D, d M Y H:i:s"); 
	header("Expires: {$gmtDate} GMT"); 
	header("Last-Modified: {$gmtDate} GMT"); 
	header("Cache-Control: no-cache, must-revalidate"); 
	header("Pragma: no-cache");
	header("Content-Type: text/html; charset=utf-8",true);
	ini_set('default_charset', 'UTF-8');
?>

<?php

	if (isset($_POST['cad_dps_da_ganbiarra'])) {
		
		include('class/conecta.php');
		$gmtDate = gmdate("D, d M Y H:i:s"); 
		header("Expires: {$gmtDate} GMT"); 
		header("Last-Modified: {$gmtDate} GMT"); 
		header("Cache-Control: no-cache, must-revalidate"); 
		header("Pragma: no-cache");
		header("Content-Type: text/html; charset=utf-8",true);
		ini_set('default_charset', 'UTF-8');

		$titulo =  utf8_decode($_POST['titulo']);
		if(empty($titulo))$titulo =  utf8_decode("#");
		
		$museu =  utf8_decode($_POST['museu']);
		if(empty($museu))$museu =  utf8_decode("#");
		
		$tema =  utf8_decode($_POST['tema']);
		if(empty($tema))$tema =  utf8_decode("Não definido");
		
		$area_do_conhecimento =  utf8_decode($_POST['area_do_conhecimento']);
		if(empty($area_do_conhecimento))$area_do_conhecimento =  utf8_decode("Não definida");
		
		$estrategias_museograficas =  utf8_decode($_POST['estrategias_museograficas']);
		if(empty($estrategias_museograficas))$estrategias_museograficas =  utf8_decode("Não definida");

		$interatividade =  utf8_decode($_POST['interatividade']);
		if(empty($interatividade))$interatividade =  utf8_decode("Não definido");
		
		$entidade_modelada =  utf8_decode($_POST['entidade_modelada']);
		if(empty($entidade_modelada))$entidade_modelada =  utf8_decode("Não definida");

		$natureza =  utf8_decode($_POST['natureza']);
		if($natureza == "selecione")$natureza =  utf8_decode("Não definido");
		
		$dimensao =  utf8_decode($_POST['dimensao']);
		if($dimensao == "selecione")$dimensao =  utf8_decode("Não definido");
		
		$modos_de_representacao =  utf8_decode($_POST['modos_de_representacao']);
		if($modos_de_representacao == "selecione")$modos_de_representacao =  utf8_decode("Não definido");
		
		$dinamica_de_representacao =  utf8_decode($_POST['dinamica_de_representacao']);
		if($dinamica_de_representacao == "selecione")$dinamica_de_representacao =  utf8_decode("Não definido");
		
		$funcao_do_modelo =  utf8_decode($_POST['funcao_do_modelo']);
		if($funcao_do_modelo == "selecione")$funcao_do_modelo =  utf8_decode("Não definido");
		
		$estrategias_de_modelagem =  utf8_decode($_POST['estrategias_de_modelagem']);
		if(empty($estrategias_de_modelagem))$estrategias_de_modelagem =  utf8_decode("Não definida");

		$tecnologia_digital =  utf8_decode($_POST['tecnologia_digital']);
		if($tecnologia_digital == "selecione")$tecnologia_digital =  utf8_decode("Não definido");
		
		if($tecnologia_digital == "Sim"){
			
			$quais_tecnologia_digital =  utf8_decode($_POST['quais_tecnologia_digital']);
			if(empty($quais_tecnologia_digital))$quais_tecnologia_digital =  utf8_decode("Não definida");
			
			$como_tecnologia_digital =  utf8_decode($_POST['como_tecnologia_digital']);
			if(empty($como_tecnologia_digital))$como_tecnologia_digital =  utf8_decode("Não definida");
		
		}else{
			
			$quais_tecnologia_digital =  utf8_decode("Você disse que não tinha TD integrada");
			
			$como_tecnologia_digital =  utf8_decode("Você disse que não tinha TD integrada");

		}
		
		$curiosidades =  utf8_decode($_POST['curiosidades']);
		if(empty($curiosidades))$curiosidades =  utf8_decode("Não definida");
		
		###################
		
		$sql = "INSERT INTO conjuntos_expositivos(titulo,museu,tema,area_do_conhecimento,estrategias_museograficas,interatividade,entidade_modelada,natureza,dimensao,modos_de_representacao,dinamica_de_representacao,funcao_do_modelo,estrategias_de_modelagem,tecnologia_digital,quais_tecnologia_digital,como_tecnologia_digital,curiosidades) VALUES ('$titulo','$museu','$tema','$area_do_conhecimento','$estrategias_museograficas','$interatividade','$entidade_modelada','$natureza','$dimensao','$modos_de_representacao','$dinamica_de_representacao','$funcao_do_modelo','$estrategias_de_modelagem','$tecnologia_digital','$quais_tecnologia_digital','$como_tecnologia_digital','$curiosidades')";
		
		mysql_query($sql, $conn) or die("<font style=Arial color=red><h1>Houve um erro na gravação dos dados</h1></font>");

		//mysqli_query($con,$sql) or die( ("<font style=Arial color=red><h1>Houve um erro na gravação dos dados</h1></font>"));
		
		$mostra = mysql_query("SELECT * FROM conjuntos_expositivos ORDER BY id desc");
		$numRegistros = mysql_num_rows($mostra);
		$item = mysql_fetch_object($mostra);
			echo  utf8_decode($item->titulo)."&nbsp&nbsp&nbsp&nbsp&nbsp";
			echo  utf8_decode($item->museu)."&nbsp&nbsp&nbsp&nbsp&nbsp";
			echo  utf8_decode($item->tema)."&nbsp&nbsp&nbsp&nbsp&nbsp";
			echo "<hr>";
		
		
		//echo "<script>alert(mysql_query($mostra, $conn))</script>";
		

		
	}

?>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastrar conjuntos expositivos</title>
	
	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
		
	<script type="text/javascript" src="js/bibliotecaAjax.js"></script>
	<script type="text/javascript" src="js/cadastrar.js"></script>
	<script src="js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	
	<noscript>Desculpe, mas seu navegador não suporta <b>JavaScript</b>, ou ele pode estar desabilitado! Sua experiência com esse sistema ficará seriamente afetada!</noscript>

	
</head>
<body>

<div class="container">
<h1>Cadastrar Conjuntos Expositivos</h1>

	<form id="theForm" method="post" name="theForm" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">

	<div class="panel panel-primary">
	<div class="panel-body">
		
		<table width = "50%" border = "0" frame="none">
		
			<tr><td>
			<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
			<br></tr></td>
			
			<tr><td>
			<input type="text" class="form-control" id="museu" name="museu" placeholder="Museu de origem">
			<br></tr></td>
			
			<tr><td>
			<h3> Características do conjunto expositivo </h3>
			</tr></td>
			
			<tr><td>
			<input type="text" class="form-control" id="tema" name="tema" placeholder="Tema">
			<br></tr></td>
			
			<tr><td>
			<input type="text" class="form-control" id="area_do_conhecimento" name="area_do_conhecimento" placeholder="Área(s) de conhecimento">
			<br></tr></td>
			
			<tr><td>
			<input type="text" class="form-control" id="estrategias_museograficas" name="estrategias_museograficas" placeholder="Estratégias museográficas">
			<br></tr></td>
			
			<tr><td>
			<input type="text" class="form-control" id="interatividade" name="interatividade" placeholder="Interatividade potencial">
			<br></tr></td>
			
			<tr><td>
			<h3> Características da entidade de interesse científico representada </h3>
			</tr></td>
			
			<tr><td>
			<input type="text" class="form-control" id="entidade_modelada" name="entidade_modelada" placeholder="Entidade modelada">
			<br></tr></td>
			
			<tr><td>
			<select class="form-control" id="natureza" name="natureza">
				<option value="selecione">Natureza da entidade</option>
				<option value="Objeto">Objeto</option>
				<option value="Processo">Processo</option>
				<option value="Objeto & Processo">Objeto & Processo</option>
				<option value="Ideia ou Informação">Ideia ou Informação</option>
			</select>
			<br></td></tr>
			
			<tr><td>
			<select class="form-control" id="dimensao" name="dimensao">
				<option value="selecione">Dimensão da entidade</option>
				<option value="Nanométrica">Nanométrica</option>
				<option value="Micrométrica">Micrométrica</option>
				<option value="Métrica">Métrica</option>
				<option value="Megamétrica">Megamétrica</option>
				<option value="Gigamétrica">Gigamétrica</option>
			</select>
			<br></td></tr>
			
			<tr><td>
			<h3> Características do modelo no contexto da exposição</h3>
			</tr></td>
			
			<tr><td>
			<select class="form-control" id="modos_de_representacao" name="modos_de_representacao">
				<option value="selecione">Modos de representação</option>
				<option value="Concreto(3D)">Concreto (3D)</option>
				<option value="Visual(2D ou pseudo­3D)">Visual (2D ou pseudo­3D)</option>
				<option value="Verbal ou simbólico">Verbal ou simbólico</option>
			</select>
			<br></td></tr>
			
			<tr><td>
			<select class="form-control" id="dinamica_de_representacao" name="dinamica_de_representacao">
				<option value="selecione">Dinâmica de representação</option>
				<option value="Modelo estático">Modelo estático</option>
				<option value="Modelo dinâmico">Modelo dinâmico</option>
			</select>
			<br></td></tr>
			
			<tr><td>
			<select class="form-control" id="funcao_do_modelo" name="funcao_do_modelo">
				<option value="selecione">Função do Modelo</option>
				<option value="Pedagógica ou de divulgação">Pedagógica ou de divulgação</option>
				<option value="Ornamental">Ornamental</option>
				<option value="Científica-instrumental">Científica-instrumental</option>
			</select>
			<br></td></tr>
			
			<tr><td>
			<input type="text" class="form-control" id="estrategias_de_modelagem" name="estrategias_de_modelagem" placeholder="Estratégia de Modelagem">
			<br></tr></td>
			
			<tr><td>
			<h3> Integração de Tecnologias Digitais (TD)</h3>
			</tr></td>

			<tr><td>
			<select class="form-control" id="tecnologia_digital" name="tecnologia_digital" onChange="TD(this.value)">
				<option value="selecione">Havia alguma TD integrada ao conjunto expositivo?</option>
				<option value="Sim">Sim</option>
				<option value="Não">Não</option>
				<option value="Aspecto não identificado">Aspecto não identificado</option>
				</select>
			<br></td></tr>
			
			<tr><td>
			<label> Em caso afirmativo, quais recursos tecnológicos (devices) foram empregados? </label>			
			</td></tr>
			<tr><td>
			<input type="text" style="display:none" class="form-control" id="quais_tecnologia_digital" name="quais_tecnologia_digital" placeholder="">
			<br></td></tr>
			
			<tr><td>
			<label> De que forma esses recursos tecnológicos foram empregados no conjunto expositivo? </label>			
			</td></tr>
			<tr><td>
			<input type="text" style="display:none" class="form-control" id="como_tecnologia_digital" name="como_tecnologia_digital" placeholder="">
			<br></td></tr>
	
			<tr><td>
			<label> Curiosidades sobre a exposição e outras considerações sobre o conjunto expositivo </label>
			</td></tr>
			<br><tr><td><textarea name="curiosidades" id="curiosidades" rows="4" cols="80" placeholder="Curiosidades..."></textarea></td></tr>
	</table>
		<hr>
		<input type="submit" class="btn btn-primary" name="cadastrar" id="cadastrar" onClick="Confirma()" value="cadastrar">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="reset"  class="btn btn-warning" name="apagar" id="apagar" value="Apagar Campos">
		
		
	</div>
	</div>
	</form>
	
	<a href="mostrar.php">Mostrar conjuntos cadastrados</a>
	<br><br><br><br><br><br>
	
	<!--<div id="saida">	</div>-->
	
</div>


</body>
</html>