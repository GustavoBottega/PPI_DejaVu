<?php 

session_start(); 
include "formulario.php";

if (!isset($_SESSION["email"])) {
header("location:login.php");
}

$sql = "select * from usuarios where id=".$_SESSION['usuario'];
$query= mysqli_query($conexao, $sql);
$user = mysqli_fetch_array($query);
?>
<html>
<meta charset="utf-8">
<head>
	<title>Acervo Histórico</title>
 
<?php include 'headers/header.php'?>
      <style>
      .materialize-textarea{
        font-size:32px;
      }
      </style>

    </head>
<body>
<?php include 'navs/nav3.php' ?>
<br><br><br><br>
<div class="container">
<div class="container">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
          <span class="card-title" ></span>
        </div>
<div class="row">
    <form class="col s12" method="POST" action="formulario.php">
      <div class="row">
        <div class="input-field col s8">
          <i class="material-icons prefix">forum</i>
          <textarea id="textarea1" class="materialize-textarea" data-length="120"></textarea>
          <label for="textarea1">Comentário:</label>
        </div>
      </div>      
  </div>
  <div class="card-action">
  <button type="submit" name="submit" class="btn waves-effect waves-default center-align" style="background-color: #8fd149" >Enviar<i class="material-icons">send</i></button>
        </div>
      </div>
    </div>
  </div>
  </div>
  </form>
<br>