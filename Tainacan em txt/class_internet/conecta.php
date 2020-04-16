<?php

// Conexão com o banco de dados

	$conn = @mysql_connect("localhost", "id9848874_root", "antimateria") or die("Não foi possível a conexão com o Banco");

	// Selecionando banco

	$db = @mysql_select_db("id9848874_tainacan_em_txt", $conn) or die("Não foi possível selecionar o Banco");

?>