<?php 
include "Teste.php";

$conecta = mysqli_connect("localhost", "root", "", "cesta") or print (mysqli_error()); 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO!
$nome	= $_POST ["cnome"];	//atribuição do campo "nome" vindo do formulário para variavel	
$email	= $_POST ["cemail"];	//atribuição do campo "email" vindo do formulário para variavel
//$ddd	= $_POST ["ddd"];	//atribuição do campo "ddd" vindo do formulário para variavel
$tel	= $_POST ["cnumero"];	//atribuição do campo "telefone" vindo do formulário para variavel
$endereco	= $_POST ["cendereco"];	//atribuição do campo "endereco" vindo do formulário para variavel
//$cidade	= $_POST ["cidade"];	//atribuição do campo "cidade" vindo do formulário para variavel
//$estado	= $_POST ["estado"];	//atribuição do campo "estado" vindo do formulário para variavel
//$bairro = $_POST ["bairro"];	//atribuição do campo "bairro" vindo do formulário para variavel
$nacionalidade	= $_POST ["cnacionalidade"];	//atribuição do campo "nacionalidade" vindo do formulário para variavel
$instituicao	= $_POST ["cinstituicao"];	
$lingua	= $_POST ["clingua"];	
$sexo = $_POST ["tsexo"];	//atribuição do campo "sexo" vindo do formulário para variavel

$query = "INSERT INTO `voluntario` (`IdUsuario`, `Nome`, `Nacionalidade`, `Instituicao`, `Endereco`, `Telefone`, `Email`, `Idioma`, `Genero`) 
VALUES (NULL, '".$nome."', '".$nacionalidade."', '".$instituicao."', '".$endereco."', '".$tel."', '".$email."', '".$lingua."', '".$sexo."');";

mysqli_query($conecta, $query);

echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
mysqli_close($conecta);
?> 