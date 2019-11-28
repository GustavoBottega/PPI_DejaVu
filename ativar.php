<?php
include "formulario.php";
$id=$_GET['id'];
$sql="update usuarios set status=0 where id=".$id;
$query=mysqli_query($conexao,$sql);

header("location:edit_users.php");


?>