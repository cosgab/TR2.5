<?php
    /*  
        @name: model.user.inc.php
        @ver: 1.0
        @date: 2017/04/20
        @descr: modello dell'entità utenti'
    */
    require_once 'connection.inc.php';

    class User
    {        
        /*
            verifica se l'accoppiata utente password hanno una corrispondenza
            nella tabella e l'utente è attivo
        */
        static function getUtente( $utente, $password ){
            $sql = "SELECT attivo FROM gsautenti WHERE idutente = ? and passwd = ?";
            $md5Password = md5($password);
            $q = MyPDO::getConn()->prepare($sql);
            $q->execute(array($utente, $md5Password));
            $result = $q->fetch(PDO::FETCH_ASSOC);
            
            if( $result['attivo'] == 'S'){
                $valido = 'S';
            }else{
                $valido = 'N';
            }
            return $valido;
        }

    }

?>