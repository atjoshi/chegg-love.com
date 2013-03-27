<?php
/**
 * 
 * Description of Database
 *
 * @author atjoshi
 * 
 */
namespace Lovecom\Business;

class Database
{
    protected static $db = array();

    public static function getInstance( $dbKey )
    {
        if( !isset(self::$db[ $dbKey ] ) )
        {
                self::$db[ $dbKey ] = self::instantiate( $dbKey );
                self::$db[ $dbKey ];
        }
        return self::$db[ $dbKey ];
    }

    public static function instantiate( $dbKey )
    {
        $dbConfig = Config::$db[ $dbKey ];
        return new PDO( "mysql:host=". $dbConfig[ 'host_name' ]. ";port=". $dbConfig[ 'connection_port' ]
                        ."dbname=". $dbConfig[ 'db_name' ],
                        $dbConfig[ 'user_name' ],
                        $dbConfig[ 'password' ] );
    }
}