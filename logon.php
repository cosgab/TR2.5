<?php
    /*
        verifica se deve essere effettuato il controllo
    */
    include 'inc/model.user.inc.php';

    if( isset($_POST['user']) ){
        $valido = User::getUtente( $_POST['user'], $_POST['password'] );
        if( $valido == 'S'){
            session_start();
            $_SESSION['user'] = $_POST['user'];
            header("location: ges_cliente.php");
        }
    }

    include 'inc/header.inc.php';
?>
<!-- Header -->
<div class="w3-content " style="margin-top:200px;">
  <div class="w3-display-center w3-padding w3-col l7" style="margin-left:20%;">
    <div class="w3-container w3-red">
      <h2><i class="fa fa-key w3-margin-right"></i>Logon</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16">
      <form action="logon.php"   method="post">
        <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-margin-bottom">
            <label><i class="fa fa-user-o"></i> Utente</label>
            <input class="w3-input w3-border" type="text" name="user" required>
          </div>
          <div class="w3-margin-bottom">
            <label><i class="fa fa-unlock"></i> Password</label>
            <input class="w3-input w3-border" type="password" name="password" required>
          </div>
        </div>

        <button class="w3-button w3-dark-grey" type="submit"><i class="fa fa-search w3-margin-right"></i> Accesso</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>