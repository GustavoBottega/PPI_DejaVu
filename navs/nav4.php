<style>
.nav-wrapper  {
  background-color: #8fd149;
  font-size: 32px;
  font-weight: bold;
  opacity:0.925;
}


    .page-footer  {
  background-color: #8fd149;
  font-weight: bold;
  opacity:0.925;
  padding-bottom:10px;
}

  body {
  display: flex;
  min-height: 100vh;
  flex-direction: column;
  background-color: #FFFFFF;
}

main {
  flex: 1 0 auto;
}

  #slider {
  max-width: 900px;
  margin: 50px auto;
}


</style>
<nav>
    <div class="nav-wrapper">
      <ul id="nav-mobile" >
      <li><a href="" class="logo-container"><a class='dropdown-trigger'  data-target='dropdown1'><img src="logo.png" height="54px"  margin-left: "80px" margin-top:"3px"></a></a></li>
       <ul class="right hide-on-med-and-down">
       <li><a class="waves-effect waves-light modal-trigger" data-target="modal1"><i class="material-icons">notifications</i></a></li>


          <li>
          <div class="row">
            <div class="col s12">
              <form method="POST" action="pesquisa.php">
                <div class="input-field">
                  <input id="search" name="pesquisar" type="search" required>
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>
                </div>
              </form>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </nav>
<script>
options = { hover: true, coverTrigger: false}
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, options);
  });
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, options);
  });

</script>
            <ul id='dropdown1' class='dropdown-content'>
                <li><a href="perfil.php">Perfil</a></li>
                <li><a href="editar_perfil.php">Editar</a></li>
                <li><a href="loginadm.php">Admin Page</a></li>
                <li><a href="logouting.php">Logout</a></li>
            </ul>

            
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4>Notificações</h4>
    <p>Você não tem notificações no momento. :(</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
  </div>
</div>