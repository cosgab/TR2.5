<?php
    /*
        2017-04-14
        g cossu
        name: model.cliente.inc.php
        class: Module
        use: the model to manage the gsacliente entity
    */
    require_once  'connection.inc.php';

    class Clienti
    {
        /*
            restituisce la lista dei record
        */
        static function getClienti( $filtro ){
            $sql = "SELECT idcliente, idazienda, ragsoc, indirizzofis, capfis, cittafis, 
                            codcontabilita, descrspedizione, indspedizione, capspedizione, 
                            cittaspedizione, telefono2, telefono1, modalitapagamento, terminepagamento, 
                            bancaappoggio, abi, cab, conto, cin, piva, codfisc, dasincronizzare, 
                            oldazienda, codbu, codsegmento, codbreakdown, tipomercato, affidamento, 
                            verificadadirezione
                        FROM gsacliente WHERE upper(ragsoc) like ?";

            $q = MyPDO::getConn()->prepare($sql);
            $q->execute(array($filtro));
            $q->setFetchMode(PDO::FETCH_ASSOC);
            return $q;
        }
        /*
            restituisce un record
        */
        static function getCliente( $filtro ){
            $sql = "SELECT idcliente, idazienda, ragsoc, indirizzofis, capfis, cittafis, 
                            codcontabilita, descrspedizione, indspedizione, capspedizione, 
                            cittaspedizione, telefono2, telefono1, modalitapagamento, terminepagamento, 
                            bancaappoggio, abi, cab, conto, cin, piva, codfisc, dasincronizzare, 
                            oldazienda, codbu, codsegmento, codbreakdown, tipomercato, affidamento, 
                            verificadadirezione
                        FROM gsacliente WHERE idcliente = ?";

            $q = MyPDO::getConn()->prepare($sql);
            $q->execute(array($filtro));
            $q->setFetchMode(PDO::FETCH_ASSOC);
            return $q;
        }

    }

?>