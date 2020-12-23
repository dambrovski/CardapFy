<?php

class Banco
{
    private static $dbNome = 'ws_cardapfy';
    private static $dbHost = 'mysql742.umbler.com:41890';
    private static $dbUsuario = 'adm_cardapfy';
    private static $dbSenha = '1q2w3e4r';
    
    private static $cont = null;
    
    public function __construct() 
    {
        die('A função Init nao é permitido!');
    }
    
    public static function conectar()
    {
        if(null == self::$cont)
        {
            try
            {
                self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbNome, self::$dbUsuario, self::$dbSenha); 
            }
            catch(PDOException $exception)
            {
                die($exception->getMessage());
            }
        }
        return self::$cont;
    }
    
    public static function desconectar()
    {
        self::$cont = null;
    }
}

?>
