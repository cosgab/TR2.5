<?php
    /*
        2017-04-14
        g cossu
        name: model.capoarea.inc.php
        class: Module
        use: the model to manage the gsacapoarea entity
    */
    require_once  'connection.inc.php';

    class Capoarea
    {
/*        
        private static $conn = null;
        
        static function getConn(){
            if( !self::$conn){
                try{
                    self::$conn = new MyPDO;
                }
                catch(PDOExcheption $e){
                    die( "ERRORE CONNESSIONE");
                }
            }
            return self::$conn;
        }
*/
        /*
            restituisce la lista dei record
        */
        static function getCapiarea( $filtro ){
            $sql = "SELECT idcapoarea, idazienda, cognome, nome, cfisc, telefono, telefono1, 
                                    indirizzofis, capfis, cittafis, email, badge, matricola, natoa, 
                                    datanascita, stato, tipo, idutente
                                FROM gsacapoarea WHERE idazienda = ?";

            $q = MyPDO::getConn()->prepare($sql);
            $q->execute(array($filtro));
            $q->setFetchMode(PDO::FETCH_ASSOC);

            return $q;
        }

    }

?>