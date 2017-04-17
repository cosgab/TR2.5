<?php 
    include 'inc/model.module.inc.php';
    include 'inc/model.cliente.inc.php';
    include 'inc/model.capoarea.inc.php';
?>
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/w3.css">
<link rel="stylesheet" href="style/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">

<!-- Sidebar on click -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card-2 w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
  <a href="#" class="w3-bar-item w3-button">Link 5</a>
</nav>

<?php
    include 'inc/menu.inc.php';
?>

    <div class="w3-panel w3-blue">
        <p>Attenzione</p>
    </div>

    <!-- blocco che è nascosto ed appare con il click -->
    <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-left-align">
    Lista utenti</button>
    <div id="Demo1" class="w3-container  w3-hide" >
    <?php

        $modules = Module::getModuli('usr');

    ?>
        <table class="w3-table-all w3-card-4 w3-small">
        <tr class="w3-red">
        <th>id</th>
        <th>Last Name</th>
        <th>Name</th>
        </tr>
    <?php
        while( $uno = $modules->fetch() ){
        // print_r($uno);
        // echo "--->" . print_r($uno) . "<br>";
    ?>
            <tr>
            <td><?php echo $uno['idutente']; ?></td>
            <td><?php echo $uno['cognome']; ?></td>
            <td><?php echo $uno['nome']; ?></td>
            </tr>
    <?php
        }
    ?>
        </table>
    <?php
    ?>
    </div>

    <div class="w3-container" >
    <?php

        $clienti = Clienti::getClienti('%ROMA%');
    ?>
        <table class="w3-table-all w3-card-4 w3-small">
        <tr class="w3-red">
        <th>id</th>
        <th>Last Name</th>
        <th>Name</th>
        </tr>
        <?php
        while( $uno = $clienti->fetch() ){
        // print_r($uno);
        // echo "--->" . print_r($uno) . "<br>";
        ?>
            <tr>
            <td><?php echo $uno['idcliente']; ?></td>
            <td><?php echo $uno['ragsoc']; ?></td>
            <td><?php echo $uno['codcontabilita']; ?></td>
            </tr>
        <?php
        }
        ?>
        </table>
        <?php
    ?>
    </div>
    <div class="w3-container" >
    <?php

        $clienti = Capoarea::getCapiarea('GSA');
        ?>
        <table class="w3-table-all w3-card-4 w3-small">
        <tr class="w3-red">
        <th>id</th>
        <th>Last Name</th>
        <th>Name</th>
        </tr>
        <?php
        while( $uno = $clienti->fetch() ){
        // print_r($uno);
        // echo "--->" . print_r($uno) . "<br>";
        ?>
            <tr>
            <td><?php echo $uno['idcapoarea']; ?></td>
            <td><?php echo $uno['cognome']; ?></td>
            <td><?php echo $uno['idazienda']; ?></td>
            </tr>
        <?php
        }
        ?>
        </table>
        <?php
    ?>
    </div>
<!-- Footer -->
<footer class="w3-container w3-padding-6 w3-theme-d1 w3-center" style="position:fixed; bottom:0; width:100%;" >
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
// Script for side navigation
function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "300px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}

// Close side navigation
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>