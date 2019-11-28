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
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

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
<body>

<?php include "headers/header.php"?>
<?php include "navs/nav2.php" ?>
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
      <h5>Preencha os campos abaixo: </h5>
<img src="icon_user.png" width="54px">
</center>


<div class="inp">
<br><br>
Nome: 
<br>

<form method="POST" action="cadastrando.php">


<input type="text" name="nome">
<br><br><br>
Sobrenome: 
<br>
<input type="text" name="sobrenome">

<br><br><br>

E-mail: <br>
<input type="email" name="email">

<br><br><br>

Senha: 
<br>
<input type="password" name="senha">

    </div>
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

</form>

</div>

<div class="traco"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
      function previewImagem(){
        var imagem = document.querySelector('input[name=imagem]').files[0];
        var preview = document.querySelector('img');
        
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



</body>
  </html>