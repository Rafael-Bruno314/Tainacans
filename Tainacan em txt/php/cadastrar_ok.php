

<?php

	include('../class/conecta.php');
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
	if($interatividade == "selecione")$interatividade =  utf8_decode("Não definido");
	
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
	
	//mysqli_query($con,$sql) or die( ("<font style=Arial color=red><h1>Houve um erro na gravação dos dados</h1></font>"));
	mysql_query($sql, $conn) or die("<font style=Arial color=red><h1>Houve um erro na gravação dos dados</h1></font>");

	
	
	/*$query_pasta = mysqli_query($con,"SELECT * FROM conjuntos_expositivos");
	
	$i = 0;
	while($past = mysqli_fetch_row($query_pasta)) {
		echo ($past[$i]);
		$i++;
	}*/
	
	###################
	
	$titulo =  utf8_encode($titulo);
	$museu =  utf8_encode($museu);
	$tema =  utf8_encode($tema);
	$area_do_conhecimento =  utf8_encode($area_do_conhecimento);
	$estrategias_museograficas =  utf8_encode($estrategias_museograficas);
	$interatividade =  utf8_encode($interatividade);
	$entidade_modelada =  utf8_encode($entidade_modelada);
	$natureza =  utf8_encode($natureza);
	$dimensao =  utf8_encode($dimensao);
	$modos_de_representacao =  utf8_encode($modos_de_representacao);
	$dinamica_de_representacao =  utf8_encode($dinamica_de_representacao);
	$funcao_do_modelo =  utf8_encode($funcao_do_modelo);
	$estrategias_de_modelagem =  utf8_encode($estrategias_de_modelagem);
	$tecnologia_digital =  utf8_encode($tecnologia_digital);
	$quais_tecnologia_digital =  utf8_encode($quais_tecnologia_digital);
	$como_tecnologia_digital =  utf8_encode($como_tecnologia_digital);
	$curiosidades =  utf8_encode($curiosidades);
	
	
	$endereco = "C:\\Users\\1234\\Desktop\\"; 
	mkdir($endereco.$museu);
	$name = $endereco.$museu.'\\'.$museu.' - '.$titulo.'.txt';
	$file = fopen($name, 'a');
	
		$titulo = "Título: ".$titulo."\r\n";
		$museu = "Museu: ".$museu."\r\n";
		$tema = "Tema: ".$tema."\r\n";
		$area_do_conhecimento = "Área(s) do conhecimento: ".$area_do_conhecimento."\r\n";
		$estrategias_museograficas = "Estratégias museograficas: ".$estrategias_museograficas."\r\n";
		$interatividade = "Interatividade potencial: ".$interatividade."\r\n";
		$entidade_modelada = "Entidade modelada: ".$entidade_modelada."\r\n";
		$natureza = "Natureza da entidade: ".$natureza."\r\n";
		$dimensao = "Dimensão da entidade: ".$dimensao."\r\n";
		$modos_de_representacao = "Modos de representação: ".$modos_de_representacao."\r\n";
		$dinamica_de_representacao = "Dinâmica de representação: ".$dinamica_de_representacao."\r\n";
		$funcao_do_modelo = "Função do Modelo: ".$funcao_do_modelo."\r\n";
		$estrategias_de_modelagem = "Estratégia de Modelagem: ".$estrategias_de_modelagem."\r\n";
		$tecnologia_digital = "Havia alguma TD integrada ao conjunto expositivo? ".$tecnologia_digital."\r\n";
		$quais_tecnologia_digital = "Em caso afirmativo, quais recursos tecnológicos (devices) foram empregados? ".$quais_tecnologia_digital."\r\n";
		$como_tecnologia_digital = "De que forma esses recursos tecnológicos foram empregados no conjunto expositivo? ".$como_tecnologia_digital."\r\n";
		$curiosidades = "Curiosidades sobre a exposição e outras considerações sobre o conjunto expositivo: ".$curiosidades."\r\n";

	$text = $titulo."\r\n".$museu."\r\n".$tema."\r\n".$area_do_conhecimento."\r\n".$estrategias_museograficas."\r\n".$interatividade."\r\n".$entidade_modelada."\r\n".$natureza."\r\n".$dimensao."\r\n".$modos_de_representacao."\r\n".$dinamica_de_representacao."\r\n".$funcao_do_modelo."\r\n".$estrategias_de_modelagem."\r\n".$tecnologia_digital."\r\n".$quais_tecnologia_digital."\r\n".$como_tecnologia_digital."\r\n".$curiosidades."\r\n\r\n\r\n";
	
	fwrite($file, $text);
	fclose($file);