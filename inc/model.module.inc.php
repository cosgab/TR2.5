<?php
    /*
        2017-04-14
        g cossu
        name: model.module.inc.php
        class: Module
        use: the model to manage the module entity
    */
    require_once 'connection.inc.php';

    class Module
    {        
/*        private static $conn = null;
        
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
        static function getModuli( $filtro ){
            $sql = "SELECT * FROM gsautenti WHERE idruolo like ?";

            $q = MyPDO::getConn()->prepare($sql);
            $q->execute(array($filtro));
            $q->setFetchMode(PDO::FETCH_ASSOC);
            return $q;
        }

    }

?>