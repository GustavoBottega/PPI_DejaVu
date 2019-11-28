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
<meta charset="UTF-8">
<head>
	<title>Acervo Histórico</title>
  <link rel = "stylesheet" type="text/css" href = "CSS/pag.css">

        


  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="../ideal-image-slider.css">
  <link rel="stylesheet" href="../themes/default/default.css">
      <script src="js/jquery-3.4.1.min.js"></script>
      <script src="js/materialize.min.js"></script>
      

    </head>
<body>
<?php include 'navs/nav4.php' ?>
<center>
<div class="container">
        
        <br><br><br>
        <h2 charset="utf-8">Be vindo Administrador! </h2>  <br> 
        <h5 align="middle"> Aqui você podera acessar todos os dados contidos no banco de dados e adiministralos</h5>
        <h5 align="middle">Cuidado!..   Consulte os outros administradores antes de fazer alterações permanentes!</h5>

        <br><br>
        </div>
<br><br>
<?php include_once 'formulario.php'?>
<?php include_once 'headers/header.php'?>

<h5>Nova Publicação: <a class="btn-floating btn-large waves-effect waves-light red" href="publica.php"><i class="material-icons" >add</i> </a></h5>
<br>
<div class="container">

<div class="row">
    <form action="edit_users.php">
<button> Editar Usuarios </button>
    </form>


<form action="edit_pub.php">
  <button>  Editar publicações </button>
  </form>


</center>
</div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });
</script>
<br>
    <br><br><br><br><br><br><br><br><br>


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