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
      

<li>Insira sua Foto de perfil</li>
		<form method="POST" action="salvando.php" enctype="multipart/form-data">
			<input type="file" name="imagem" id="imagem" onchange="previewImagem()"><br><br>
			<img style="width: 150px; height: 150px;" name = "magem" id="magem" ><br><br>
    
    <div class="inp">





    <br><br>
    Nome: 
    <br>




    <input type="text" name="nome" value="<?= $user['nome'] ?>">
    <br><br><br>
    Sobrenome: 
    <br>
    <input type="text" name="sobrenome" value="<?= $user['sobrenome'] ?>">

    <br><br><br>

    E-mail: <br>
    <input type="email" name="email" value="<?= $user['email'] ?>">

    <br><br><br>

    Senha: 
    <br>
    <input type="password" name="senha" value="<?= $user['senha'] ?>">

              <div class="file-path-wrapper">
          </div>
        </div>
          <br><br>
          <center>
          <button href="perfil.php" class="btn waves-effect waves-default center-align" style="background-color: #db0025" >Cancelar<i class="material-icons">close</i></button> 
          <button type="submit" name="submit" class="btn waves-effect waves-default center-align" style="background-color: #8fd149" >Enviar<i class="material-icons">send</i></button
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