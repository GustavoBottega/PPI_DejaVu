<?php

session_start();

include_once 'formulario.php';

$id = $_GET['id'];

$sql = "DELETE FROM `feedback` WHERE id_usuario = ".$_SESSION['usuario']." AND idpub = $id";

$result = mysqli_query($conexao, $sql);

if ($result){

	header("location: pagina.php");
}
else{
	echo "Erro ao inserir registro." . mysqli_error($conexao);
}

mysqli_close($conexao);

?>