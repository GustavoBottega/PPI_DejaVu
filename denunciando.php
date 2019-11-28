<?php

include "formulario.php";
mysqli_set_charset($conexao, "utf-8");

$ofensa = $_POST['ofense'];
$palavrao = $_POST['word'];
$nude = $_POST['nude'];
$exposed = $_POST['exposed'];
$motivo = $_POST['outro_motivo'];

$id_postagem = $_POST['id_post'];

$sql = "insert into denuncia_p (ofensivo, palavrao, nudez, expositivo, outro_motivo, id_post) values ('$ofensa'  ,'$palavrao', '$nude' ,'$exposed', '$motivo', $id_postagem) " ;
$query = mysqli_query($conexao, $sql );

echo $sql;

if ($query){

	header("location: pagina.php");
}
else{
	echo "Erro ao inserir registro." . mysqli_error($conexao);
}

mysqli_close($conexao);

?>