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
<?php include 'headers/header.php'?>
<?php include 'navs/nav4.php' ?> 



<center>
<div class="container">


      
    </div>
      
<br><br>

<h5>Nova Publicação: <a class="btn-floating btn-large waves-effect waves-light red" href="publica.php"><i class="material-icons" >add</i> </a></h5>
<br>
<div class="container">

<div class="row">
<?php 

$sql="SELECT * FROM postagens ORDER BY id desc";
$result=mysqli_query( $conexao,$sql);


$sql2="SELECT * FROM imagem";

$result2=mysqli_query( $conexao,$sql2);

foreach($result as $postagens){

  $sql_c = "select c.*, u.nome, u.sobrenome from comentarios as c, usuarios as u where c.id_user = u.id ";
  $sql_c2 = "select * from feedback WHERE id_usuario = ".$_SESSION['usuario']." AND idpub = ".$postagens['id'];

  $coment = mysqli_query($conexao, $sql_c);
  $curti = mysqli_query($conexao, $sql_c2);
  $num = mysqli_num_rows($curti);

         echo '<div class="card s6 m7" style="width:50%;">
         
            <div class="card-image">';

            echo " <span class=''>".$postagens['texto']."</span></div>";
            
            foreach($result2 as $imagem){
              if($imagem['id_post'] == $postagens['id']){

                
                echo "<img style='width:100%;' src='".$imagem['imagem']."' >";
              }
            }

            echo "<div class='card-content'>Data: ".$postagens['data']."</div>";
            echo '<div class="card-action">
            <a href="denuncia.php?id='.$postagens['id'].'" class="waves-effect waves-light modal-trigger">Denunciar<i class="material-icons left" >block</i></a>
            <br><br>';
            $nc="SELECT COUNT(id) AS total FROM feedback where idpub=".$postagens['id'];
            $row= mysqli_query($conexao, $nc);
            $number=mysqli_fetch_array($row);
            if($num >0){
              echo '<a href="descurtindo.php?id='.$postagens['id'].'" class="waves-effect waves-light modal-trigger">Descurtir<i class="material-icons left" >thumb_down</i></a>';
              echo $number['total']." curtidas";
            } else{
            echo '<a href="curtindo.php?id='.$postagens['id'].'" class="waves-effect waves-light modal-trigger">Curtir<i class="material-icons left" >thumb_up</i></a>';}
            echo '
            <ul class="collapsible">
            <li>
            <div class="collapsible-header"><i class="material-icons">chat_bubble</i>Comentar: </div>
            <div class="collapsible-body"><span>
            <form action="comentando.php" method="POST" >
            <textarea id="textarea1" class="materialize-textarea" data-length="120" name="texto"></textarea>
            <input type="hidden" name="id" value="'.$postagens['id'].'">
            <button type="submit" name="submit" class="btn waves-effect waves-default center-align" style="background-color: #8fd149" >Enviar<i class="material-icons">send</i></button>
            </form>
            </span></div>
            </li>
            <li>
            <div class="collapsible-header"><i class="material-icons">forum</i>Ver comentários: </div>
            <div class="collapsible-body"><span>';
            
            foreach($coment as $com){
              if($postagens['id'] == $com['id_post']){
              echo $com['nome']. ' ' . $com['sobrenome'] .' - ';               
                echo $com['comentario'];
                echo "<br>";
              }              
            }
            
           echo ' </span></div>            
            </li>
            </ul>
          </div>
        </div> ';
}

?>
</center>
</div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems, options);
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