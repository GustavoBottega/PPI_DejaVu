<?php 

session_start(); 
include "formulario.php";

if (!isset($_SESSION["email"])) {
header("location:login.php");
}

mysqli_set_charset($conexao, "utf8");

$sql = "select * from usuarios where id=".$_SESSION['usuario'];
$query= mysqli_query($conexao, $sql);
$user = mysqli_fetch_array($query);
?>

<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Acervo Histórico</title>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="../ideal-image-slider.css">
  <link rel="stylesheet" href="../themes/default/default.css">
      <script src="js/jquery-3.4.1.min.js"></script>
      <script src="js/materialize.min.js"></script>

      <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      

    </head>

<body>
<?php include 'navs/nav3.php' ?> 

  </div>

<center>
<div class="container">


      
    </div>
        </div>
<br><br>

<?php include_once 'headers/header.php'?>

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

         echo '<div class="card s6 m7" style="width:50%;">';
       echo '<a href="edit_pub2.php?id='.$postagens['id'].'" > --Editar--   </a>';

       echo '<a href="excluir_post.php?id='.$postagens['id'].'" > --Excluir-- </a>';

           echo '<div class="card-image">';

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
            if($num >0){
              echo '<a href="descurtindo.php?id='.$postagens['id'].'" class="waves-effect waves-light modal-trigger">Descurtir<i class="material-icons left" >thumb_down</i></a>';
            } else{
            echo '<a href="curtindo.php?id='.$postagens['id'].'" class="waves-effect waves-light modal-trigger">Curtir<i class="material-icons left" >thumb_up</i></a>';}
            echo '
            <ul class="collapsible">
            <li>
            <div class="collapsible-header"><i class="material-icons">forum</i>Ver comentários: </div>
            <div class="collapsible-body"><span>';
            
            foreach($coment as $com){
              echo $com['nome']. ' ' . $com['sobrenome'] .' - ';               
                echo $com['comentario'];
                echo "<br>";
              
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