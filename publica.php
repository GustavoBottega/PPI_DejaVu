<?php 

session_start(); 
include "formulario.php";

if (!isset($_SESSION["email"])) {
header("location:login.php");
}

mysqli_set_charset($conexao, "utf8");

$sql = "select * from postagens where id=".$_SESSION['usuario'];
$query= mysqli_query($conexao, $sql);
$user = mysqli_fetch_array($query);

?>

<html>
<meta charset="utf-8">
<head>
	<title>Login</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>

    .nav-wrapper  {
    background-color: #8fd149;
    font-size: 32px;
    font-weight: bold;
    opacity:0.925;
  }
   </style>
   </head>


<body>
<?php include_once 'headers/header.php'?>
<?php include 'navs/nav3.php' ?>

<br><br>
  <div class="container">
  <div class="container">
  <div class="card">
    <div class="card-image">
    </div>
    <div class="container">
    <div class="card-content">
    <div class="card-content">
      <center>
        
  </ul>

      <h5>Preencha os campos abaixo: </h5>
      

<h3>Insira os dados da sua postagem</h3>
		<form method="POST" action="pub.php" enctype="multipart/form-data">
    <div class="inp"> 
    <br><br>
    Texto
    <br>
    <input type="text" name="texto" placeholder="Digite a descrição da sua postagem">
    <br><br><br>
    <input type="file" name="imagem" id="imagem" onchange="previewImagem()"><br><br>
			<img style="width: 150px; height: 150px;" name = "magem" id="magem" ><br><br>
    
          <br><br>
          <center>
          <button type="submit" name="submit" class="btn waves-effect waves-default center-align" style="background-color: #8fd149" >Enviar<i class="material-icons">send</i></button>
          </center>
        </form>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
    </div>


</div>

<footer class="nav-wrapper">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text" style="font-size:16px;">Desenvolvido por: </h5>
            <p class="grey-text text-lighten-4" style="font-size:14px;">Leon Tassinari, Lucas Rabaioli, Valentina Camargo, Gustavo Bottega</p>
          </div>
        </div>
      </div>
        </div>
      </div>
    </footer>
		
    <script>
			function previewImagem(){
				var imagem = document.querySelector('input[name=imagem]').files[0];
				var preview = document.querySelector('img[name=magem]');
				
				var reader = new FileReader();
				
				reader.onloadend = function () {
					preview.src = reader.result;
				}
				
				if(imagem){
					reader.readAsDataURL(imagem);
				}else{
					preview.src = "";
				}
			}
		</script>


</body>
  </html>