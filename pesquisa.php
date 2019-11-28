<head>
<link rel = "stylesheet" type="text/css" href = "CSS/pag.css">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/custom.css">

      <meta charset="utf-8">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

      <script src="js/jquery-3.4.1.min.js"></script>
      <script src="js/materialize.min.js"></script>
</head>
<body>
<?php include 'navs/nav3.php' ?>




  
<?php include_once 'formulario.php'?>
<?php include_once 'headers/header.php'?>


<?php

include ('formulario.php');

//Pesquisa
$pesquisa = $_POST['pesquisar'];
$result="SELECT * FROM postagens WHERE texto LIKE '%$pesquisa%'";
$resultado=mysqli_query($conexao, $result);

$sql2="SELECT * FROM imagem";

$result2=mysqli_query( $conexao,$sql2);

while ($row = mysqli_fetch_array($resultado)) {
  echo '<center><div class="card s6 m7" style="width:50%;">
         
  <div class="card-image">';

  echo " <span class=''>".$row['texto']."</span></div>";
  
  foreach($result2 as $imagem){
    if($imagem['id_post'] == $row['id']){

      
      echo "<img style='width:100%;' src='".$imagem['imagem']."' >";
    }
  }

  echo "<div class='card-content'>Data: ".$row['data']."</div>";
  echo '<div class="card-action">
  <a href="#">Clique aqui para visualizar a postagem no feed</a>
</div>
</div> </center>';
}

?>
</body> 
