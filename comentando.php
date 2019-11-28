<?php

session_start();

include_once 'formulario.php';

$id = $_POST['id'];
$texto = $_POST['texto'];

$sql = "INSERT INTO `comentarios`(`comentario`, `id_user`, `id_post`) VALUES ('$texto',".$_SESSION['usuario'].",$id)";

$result = mysqli_query($conexao, $sql);

if ($result){

	header("location: pagina.php");
}
else{
	echo "Erro ao inserir registro." . mysqli_error($conexao);
}

mysqli_close($conexao);

?>