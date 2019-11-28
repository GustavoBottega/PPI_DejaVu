<?php

session_start();

include_once 'formulario.php';

$id = $_GET['id'];

$sql = "INSERT INTO `feedback`(`id_usuario`, `idpub`) VALUES (".$_SESSION['usuario'].",$id)";

$result = mysqli_query($conexao, $sql);

if ($result){

	
		header("location: pagina.php");
}
else{
	echo "Erro ao inserir registro." . mysqli_error($conexao);
}

mysqli_close($conexao);

?>