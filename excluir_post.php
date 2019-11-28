<?php
include "formulario.php";

$sql2="DELETE FROM feedback WHERE  idpub=" .$_GET['id'];
$result2=mysqli_query( $conexao,$sql2);



$sql3="DELETE FROM comentarios WHERE id_post=" .$_GET['id'];
$result3=mysqli_query( $conexao,$sql3);



$sql1="DELETE FROM imagem WHERE id_post=" .$_GET['id'];
$result1=mysqli_query( $conexao,$sql1);


$sql="DELETE FROM postagens WHERE id=" .$_GET['id'];
$result=mysqli_query( $conexao,$sql);

header("location:edit_pub.php");

?>