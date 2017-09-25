<?php 

class ConexaoPDO {

    private static $db_username = "";
    private static $db_password = "";
    private static $tns = " (DESCRIPTION =(ADDRESS_LIST =(ADDRESS = (PROTOCOL = TCP) (HOST = )(PORT = )))(CONNECT_DATA = (SID =)))";
    private static $instance;

    public static function getInstance() 
    {

        if (!isset(self::$instance))
        {

            try {
                self::$instance = new PDO("oci:dbname=" . self::$tns, self::$db_username, self::$db_password);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
            }
            catch(PDOException $pe)
            {
                echo "Erro ao conectar com o banco: ".$pe->getMessage();
                exit;
            }


        }



        return self::$instance;
    }


}
