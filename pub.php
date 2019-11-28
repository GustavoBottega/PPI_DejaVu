<?php
session_start();
include "formulario.php";
mysqli_set_charset($conexao,"utf8");

$texto = $_POST['texto'];
$data = date("Y-m-d H:i:s");

$sql1= "insert into postagens(texto, data, id_user) values ('$texto', '$data', ".$_SESSION['usuario'].")";
$query1=mysqli_query($conexao, $sql1 );


$sql2="select * from postagens where id_user=".$_SESSION['usuario']." order by id desc limit 1 ";
$query2=mysqli_query($conexao, $sql2 );

$postagem=mysqli_fetch_array($query2);

if($_FILES['imagem']['tmp_name'] !== ""){
    $extensao = strtolower(substr($_FILES['imagem']['name'], -4)); //pega a extensao do arquivo
    $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
    $diretorio = "publica/"; //define o diretorio para onde enviaremos o arquivo
    $ft = $diretorio.$novo_nome; 
    move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

    $sql3 = "insert into imagem (imagem,id_post) values ('$ft',". $postagem["id"].")";  
    $query3 = mysqli_query($conexao, $sql3 );


    if ($query1){

        header("location:pagina.php"); 
    }
    else{
        echo "Erro ao inserir registro." . mysqli_error($conexao);
        header("location:edit_pub.php");
    }
}


mysqli_close($conexao);
?>