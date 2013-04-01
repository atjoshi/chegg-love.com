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
	$items = \Lovecom\Mvc\MvcHelper::getResourceDatabase();
        $dbConfig = $items[ 'master_read' ];
        return new \PDO( "mysql:host=". $dbConfig[ 'hostname' ]. ";port=". $dbConfig[ 'connectionport' ]
                        ."dbname=". $dbConfig[ 'db' ],
                        $dbConfig[ 'username' ],
                        $dbConfig[ 'password' ] );
    }
}
