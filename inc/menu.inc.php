<?php
    /*
        2017-04-17
        g cossu
        name: menu.inc.php
        use: thin include calls the model menu to create the heading menu        
    */
    include 'inc/model.menu.inc.php';
    // generazione del menu
    $menu = Menu::getMenu( 'cosgab' );

?>
 <div >
 <div class="w3-bar w3-theme-d2 w3-left-align">
 <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Logo</a>
<?php
  /*
    viene letto l'albero delle opzioni di menu
  */
  while( $uno = $menu->fetch() ){
    ?>
  <div class="w3-dropdown-hover w3-hide-small">
  <!-- primo livello -->
    <button class="w3-button" title="Notifications"><?php echo htmlentities($uno['idmenu']);  ?> <i class="fa fa-caret-down"></i></button>
    <div class="w3-dropdown-content w3-card-4 w3-bar-block"> 
    <?php
         $funzione = Menu::getFunzioni( 'cosgab', $uno['idmenu'] );
         while( $due = $funzione->fetch() ){
            ?><a href="<?php echo $due['funcomando']; ?>" class="w3-bar-item w3-button"><?php echo htmlentities($due['fundescr']); ?></a>
        <?php
         }    
        ?>
        </div>  </div> 
      <?php
    }
    ?> 

 
  
<!--
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Operatori <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="#" class="w3-bar-item w3-button">Anagrafica</a>
      <a href="#" class="w3-bar-item w3-button">Contratti di lavoro</a>
      <a href="#" class="w3-bar-item w3-button">Liste e report</a>
    </div>
  </div>  

-->
  <!--
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
  -->
</div>