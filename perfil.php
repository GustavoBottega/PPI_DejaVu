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



<style>

</style>
<?php include 'headers/header.php' ?>
<?php include 'navs/nav3.php' ?>
<meta charset="utf-8">

</head>
<body>
<br><br>
  <div class="container">
  <div class="container">
  <div class="card">
    <div class="card-image">
    </div>
    <div class="container">
    <div class="card-content">
    <div class="card-content">
    <a href="editar_perfil.php" class="left"><i class="material-icons left" >settings</i>Editar perfil</a>
      <center>
      <br>

     <h6>Bem vindoª, ao Deja Vu IFFAR, <?= $user['nome']?> <?= $user['sobrenome'] ?>
     <br><br>
     
      <img src ="<?= $user['fotoperfil'] ?>" style="width: 150px; height: 150px;">
      <br><br>
      <b>Nome:</b> 
      <?= $user['nome'] ?>
      <?= $user['sobrenome'] ?>
      <br><br><br>
      <b>E-mail:</b>
      <?= $user['email'] ?>
      <br><br><br>
      <b>ID:</b> 
      <?= $user['id'] ?>
      <br><br>
      Clique <a href="publica.php">aqui</a> para adicionar uma nova publicação
      <br><br>
      Clique <a href="visualiza_pub.php">aqui</a> para ver suas publicações
      </h6>

              <div class="file-path-wrapper">
          </div>
        </div>
          <br><br>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
    </div>


</div>

<div class="traco"></div>


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