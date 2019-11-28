<?php

$server = "localhost";
$user = "root";
$senha = "usbw";
$banco = "ppi";

$conexao = mysqli_connect($server, $user, $senha, $banco);

if(!$conexao){
	echo "não foi possivel conectar ao MySQL" . PHP_EOL;
	echo "Debugging erro:". mysqli_connect_error() . PHP_EOL;
	
}

?>