<?php
/**
 * Description of config
 *
 * @author atjoshi
 * 
 */
class Config
{
    public static $db = array(
                                'love_com' => array(
                                                     'host_name'=> '127.0.0.1',
                                                     'connection_port' => '3307',
                                                     'db_name' => 'love',
                                                     'user_name' => 'root',
                                                     'password' => ''
                                                )
                            );

	/*public static $params = array(
		"memcache"	=>	array(
			"hosts"		=>	array(
									array( "host" => '127.0.0.1', "port" => '11211')
							)
		),
		"isDebugPerf" => FALSE,
		"isDebug" => FALSE
	);*/

}