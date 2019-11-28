<?php 

session_start(); 
 if (! $_SESSION["email"]) {
header("location:paginap.php");
}
?>

<?php

	include "formulario.php";
	mysqli_set_charset($conexao, "utf-8");
		

		$valor1 = $_POST['valor1'];
		$valor2 = $_POST['valor2'];
		$valor3 = $_POST['valor3']; 
		$valor4 = $_POST['idusu'];
        $sbn=$_POST['sbn'];
	
		$enviando1 = "UPDATE usuarios SET nome = '$valor1', sobrenome = '$sbn', email = '$valor2', senha = '$valor3' WHERE id = '$valor4'";

		$con = mysqli_query($conexao, $enviando1);

    header("location:edit_users.php");
?>