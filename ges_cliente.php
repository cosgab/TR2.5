<?php
    /*
        @name: gas_cliente.php
        @ver: 1.0
        @date: 2017/04/15
        @descr: gestione della anagrafica del cliente
    */
    // caricamento classi
    include 'inc/model.cliente.inc.php';
    
    // intestazione
    include 'inc/header.inc.php';
    // menu
    include 'inc/menu.inc.php';

echo <<<EOT
<form action="/action_page.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
<h4 class="w3-left">Anagrafica cliente</h2>
    <div class="w3-row-padding"> 
    <div class="w3-half w3-section-tiny">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
        <div class="w3-rest">
        <input class="w3-input w3-border w3-small" name="first" type="text" placeholder="First Name">
        </div>
    </div>

    <div class="w3-half w3-section-tiny">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
        <div class="w3-rest">
        <input class="w3-input w3-border w3-small" name="last" type="text" placeholder="Last Name">
        </div>
    </div>

    <div class="w3-half w3-section-tiny">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
        <div class="w3-rest">
        <input class="w3-input w3-border w3-small" name="email" type="text" placeholder="Email">
        </div>
    </div>

    <div class="w3-half w3-section-tiny">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
        <div class="w3-rest">
        <input class="w3-input w3-border w3-small" name="phone" type="text" placeholder="Phone">
        </div>
    </div>

    <div class="w3-half w3-section-tiny">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
        <div class="w3-rest">
        <input class="w3-input w3-border w3-small" name="message" type="text" placeholder="Message">
        </div>
    </div>


</div>
<button class="w3-button  w3-section w3-blue w3-ripple w3-padding">Send</button>
</form>

EOT;

    include 'inc/footer.inc.php';
?>