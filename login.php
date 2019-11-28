<?php session_start(); ?>
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

</head>
<body>


<?php include 'headers/header.php'?>
<?php include 'navs/nav2.php'?>


<center>
<br>
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

        <?php
        if(isset($_SESSION['ERROS'])){
        
          echo $_SESSION['ERROS'];

        }
        ?>

        <form method="POST" action="logando.php">
	       <div class="">
        	<br><br><br><br>
            E-mail: 
         	<br>
            <input name="email" type="email">
        	<br><br><br>
            Senha: 
        	<br>
                    <input name="senha" type="password">

        <br><br><br>
        <?php

        
        ?>
          <button class="btn waves-effect waves-default center-align " style="background-color: #8fd149" type="submit" name="submit" >Logar
          <i class="material-icons">done</i></button>

                                 </form>

</div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>

<div class="traco"></div>
<center>

</body>
</html>