<?php
session_start();
include "formulario.php";
mysqli_set_charset($conexao,"utf8");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST ['senha'];

if($_FILES['imagem']['tmp_name'] !== ""){
    $extensao = strtolower(substr($_FILES['imagem']['name'], -4)); //pega a extensao do arquivo
    $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
    $ft = $diretorio.$novo_nome;
    move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

    $sql = "update usuarios set nome = '$nome', 
                            email = '$email', 
                            sobrenome = '$sobrenome', 
                            senha = '$senha',
                            fotoperfil = '$ft'
            where id = ".$_SESSION['usuario'] ;

    $query = mysqli_query($conexao, $sql );

    if ($query){

        header("location:perfil.php");
    }
    else{
        echo "Erro ao inserir registro." . mysqli_error($conexao);
    }
}else{
    $sql = "update usuarios set nome = '$nome', 
    email = '$email', 
    sobrenome = '$sobrenome', 
    senha = '$senha'
    where id = ".$_SESSION['usuario'] ;

    $query = mysqli_query($conexao, $sql );
    if ($query){

        header("location:perfil.php");
    }
    else{
        echo "Erro ao inserir registro." . mysqli_error($conexao);
    }

}
mysqli_close($conexao);
?> 

