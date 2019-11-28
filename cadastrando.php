<?php

include "formulario.php";
mysqli_set_charset($conexao,"utf8");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST ['senha'];

$sql = "insert into usuarios  (nome,sobrenome, email,senha) values ('$nome'  ,'$sobrenome', '$email' ,'$senha') " ;


$query = mysqli_query($conexao, $sql );

if ($query){

	header("location:login.php");
}
else{
	echo "Erro ao inserir registro." . mysqli_error($conexao);
}

mysqli_close($conexao);


?> 
