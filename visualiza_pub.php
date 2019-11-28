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
$sql2 = "SELECT * FROM postagens WHERE id_user = ".$_SESSION['usuario'];
$result = mysqli_query($conexao, $sql2);

?>



<style>

</style>
<?php include 'headers/header.php' ?>
<?php include 'navs/nav3.php' ?>
<meta charset="utf-8">

</head>

<body>
<center>
<div class="container">
<?php
foreach($result as $postagens){

    $sql = "SELECT * FROM imagem WHERE id_post = ".$postagens['id'];
    $result2= mysqli_query($conexao, $sql);

       echo '<div class="card s6 m7" style="width:50%;">
       
          <div class="card-image">';

          echo " <span class=''>".$postagens['texto']."</span></div>";

        
          
          foreach($result2 as $imagem){         

              
              echo "<img style='width:100%;' src='".$imagem['imagem']."' >";
            
          }

          echo "<div class='card-content'>Data: ".$postagens['data']."</div>";
          echo '<div class="card-action">
          <a href="edit_pub2.php?id='.$postagens['id'].'" class="waves-effect waves-light modal-trigger">Editar postagem<i class="material-icons left" >block</i></a>
          <br><br> 
        </div>
      </div> 
          
  ';
}
?>
</div>
</center>
</body>

</html>