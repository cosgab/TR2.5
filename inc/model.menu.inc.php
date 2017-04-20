<?php
    /*
        2017-04-14
        g cossu
        name: model.menu.inc.php
        class: Module
        use: the model to manage the menu of the application
        
    */
    require_once  'connection.inc.php';

    class Menu
    {
        /*
            restituisce la lista dei menu collegati all'utente passato come parametro
        */
        static function getMenu( $utente ){
            $sql = "SELECT distinct(idmenu)
                        FROM tr3vistamenu WHERE idutente like ?";

            $q = MyPDO::getConn()->prepare($sql);
            $q->execute(array($utente));
            $q->setFetchMode(PDO::FETCH_ASSOC);
            return $q;
        }
        /*
            restituisce le funzioni di menu associate all'utente/idmenu
        */
        static function getFunzioni( $utente, $idmenu ){
            $sql = "SELECT idmenu, funid, fundescr, funcomando
                        FROM tr3vistamenu WHERE idutente = ? and idmenu = ? order by idmenu, sequenza";

            $q = MyPDO::getConn()->prepare($sql);
            $q->execute(array($utente, $idmenu));
            $q->setFetchMode(PDO::FETCH_ASSOC);
            return $q;
        }

    }

?>