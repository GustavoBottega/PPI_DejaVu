<?php

include "formulario.php";
mysqli_set_charset($conexao,"utf-8");
  $id = $_GET['id'];
  $consulta = "SELECT nome, sobrenome, email, senha, id FROM usuarios where id = $id";
  $con = mysqli_query($conexao, $consulta);
      



?>


<html>
  <head>
  <meta charset="utf-8">

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

<?php include 'headers/header.php'?>
<?php include 'navs/nav4.php' ?> 

<div class="container">
<div class="container">
 <div class="card">
    <div class="card-image">
    </div>
    <div class="container">
    <div class="card-content">
    <div class="card-content">
	<h4>Editando</h4>
		

		<table class="table">
			<thead>
			<th>Nome</th>
			<th>Sobrenome</th>
			<th>Email</th>
			<th>Senha</th>
			<th>Ação</th>
			</thead>

			<tbody>

	<br><br>

	<tr>
	<form method="POST" action="edit.php">
	<?php  while ($usuarios = $con->fetch_array()) { ?>
		

		

  <td> <input type="text" name="valor1" value="<?php echo $usuarios['nome'];?>"></td>
   <br><br> 
   

	<td>	<input type="text" name="sbn" value="<?php echo $usuarios['sobrenome'];?>"></td>
		
		
	<td> <input type="text" name="valor2" value="<?php echo $usuarios['email'];?>"> </td> 
	 <br><br>
		 
			
	<td> <input type="text" name="valor3" value="<?php  echo $usuarios['senha'];?>"></td>
	 		
	 <input type="hidden" name="idusu" value="<?php echo $usuarios['id'];?>">  



	<?php } ?>
	<td><button type="submit">Atualizar</button><td>
	</form>
	</tr>
 <br><br>
   
</tbody>
</table>
</div>
  </div>
    </div>
    </div>
    </div>
</div>
</div>





</body>
</html>