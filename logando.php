<?php 

   session_start();
   include_once "formulario.php";
   $email = $_POST["email"];
   $senha = $_POST["senha"];
   unset($_SESSION['ERROS']);
   
   
  if(empty($email) or empty($senha)){
    $_SESSION['ERROS'] = "Campos não podem se nulos";
   	header("location:login.php?asdsadas ");
   	exit();

   }	else{ 
      $email = mysqli_real_escape_string($conexao,$email);
       $senha  = mysqli_real_escape_string($conexao,$senha);
        $query = "SELECT * from usuarios where email = '{$email}' and senha = '{$senha}' ";
       
       
      $result = mysqli_query($conexao, $query);
      $row = mysqli_num_rows($result);
      $user=mysqli_fetch_assoc($result); 

      
   if ($row == 1){ 
      
    if($user['status'] == 1){
      $_SESSION['ERROS'] = "Você foi inativado pelos administradores. Para mais informações mande um email pra pipipi popopo";
     
      header('location:login.php'); 
    }

    
    else{
      $_SESSION['email'] = $email;
      $_SESSION['usuario'] = $user['id'];
      header('location:pagina.php'); 
}
     
   }else{
   
   $_SESSION['ERROS'] = "Email ou Senha incorretos";
   header('location:login.php');
   exit();
   }
 }
 ?>