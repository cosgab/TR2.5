<?php
    /*  
        @name: common.inc.php
        @ver: 1.0
        @date: 2017/04/20
        @descr: gestione della sessione e controllo logon
    */
    session_start();

    if (! isset($_SESSION['user']) ){
        header("location: logon.php");
    }

    function logout(){
        session_unset();
        session_destroy();
    }
?>