<?php

$host= 'localhost';
$bd= 'didir076_coi_botox';
$senhabd= 'didir076';
 
$userbd = 'didir076_didico'; 
 
 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome	= $_POST ["nome"];	//atribuição do campo "nome" vindo do formulário para variavel	
$telefone	= $_POST ["telefone"];	//atribuição do campo "email" vindo do formulário para variavel
//Gravando no banco de dados !
 
//conectando com o localhost - mysql
$conexao = mysql_connect($host,$userbd,$senhabd);
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db($bd,$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
 
$query = "INSERT INTO `cadastros` ( `nome` , `telefone` ) VALUES ('$nome', '$telefone')";
 
mysql_query($query,$conexao);
 

echo '<script type="text/javascript">alert("Cadastro efetuado com sucesso.")</script>';
?> 