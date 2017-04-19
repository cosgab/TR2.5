<?php
/*
 * 2017-04-14
 * g.cossu
 * class: MyPDO
 * use: is the main connection class. It uses the ini file to determine the parameters
 **/
class MyPDO extends PDO
{   
    private static $conn = null;

    static function getConn(){
        if( !self::$conn){
            try{
                $file = 'inc/dbsetting.ini';
                if (!$settings = parse_ini_file($file, TRUE)) throw new exception('Unable to open ' . $file . '.');
            
                $dns = $settings['database']['driver'] .
                ':host=' . $settings['database']['host'] .
                ((!empty($settings['database']['port'])) ? (';port=' . $settings['database']['port']) : '') .
                ';dbname=' . $settings['database']['dbname'];
            
             self::$conn = new PDO($dns, $settings['database']['username'], $settings['database']['password']);
            }
            catch(PDOExcheption $e){
                die( "ERRORE CONNESSIONE");
            }
        }
        return self::$conn;
    }

}
?>
