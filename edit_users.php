<?php 
include "formulario.php";
mysqli_set_charset($conexao, "utf8");
$sql="SELECT * FROM usuarios";
$result=mysqli_query( $conexao,$sql);



 ?>

 
 <html>
 <head meta charset="utf-8"> 

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
	 <table class='table'> 		
			
			<thead> 
				
			<th> Usuarios: </th>
			
			<th> Ações: 	</th>
			
			
			</thead>	
			
		
			
	<?php

foreach($result as $usuarios){
	echo "<tbody> <tr>";
	
    echo"<td>"."'Nome  '".$usuarios['nome']. " ". $usuarios['sobrenome']."<br>"."E-mail  ".$usuarios['email']."<br>"."Senha  ".$usuarios['senha']."<br>"."ID = ".$usuarios['id'] ."<br><br>"."</td>"."<br>";
    echo"<td> <a href='editarusers.php?id=".$usuarios['id']."'>Editar </a> </td>  ";
    															
			
	if($usuarios['status']==0){

    echo"<td> <a href='inativar.php?id=".$usuarios['id']."'>Inativar </a> </td>";
	}

}


?>	
 
	
		
	

	





	
</tr>
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
 <html>