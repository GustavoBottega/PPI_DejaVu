<?php 
  $id = $_GET['id'];
?>

<head>
<?php include 'headers/header.php'?>
</head>

<?php include 'navs/nav3.php'?>
<br><br>
<div class="row">
      <div class="card">
        <div class="card-image">
        </div>
        <div class="card-content">
          <h5>Por que você quer denunciar essa postagem? <h5p>
          <br><br>
          <form action="denunciando.php" method="POST">
          <p>
          <input type="hidden" name="id_post" value="<?php echo $id ?>">
          <label>
            <input type="checkbox" name="ofense" id="denuncia" value="1" class="filled-in" />
            <span>Conteúdo ofensivo</span>
          </label>
        </p>
        <br>
        <p>
          <label>
            <input type="checkbox" name="word" id="denuncia" value="2" class="filled-in" />
            <span>Palavrões</span>
          </label>
        </p>
        <br>
        <p>
          <label>
            <input type="checkbox" name="nude" id="denuncia" value="3" class="filled-in" />
            <span>Nudez ou conteúdo pornográfico</span>
          </label>
        </p>
        <br>
        <p>
          <label>
            <input type="checkbox" name="exposed" id="denuncia" value="4" class="filled-in"  />
            <span>Conteúdo expositivo para pessoas sensíveis</span>
          </label>
        </p>
        <br>
           <p>Outro motivo: </p>
           <textarea id="textarea1" name="outro_motivo" class="materialize-textarea"></textarea>
        </div>
        <div class="card-action">
        <center>
          <button type="submit" name="submit" class="btn waves-effect waves-default center-align" style="background-color: #8fd149" >Enviar<i class="material-icons">send</i></button>
          </center>
        </div>
      </div>
    </div>
    </form>
