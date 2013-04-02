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
                                                     'host_name'=> 'live-dbpm.dev1.cloud.cheggnet.com',
                                                     'connection_port' => '3306',
                                                     'db_name' => 'love_com',
                                                     'user_name' => 'tbflix',
                                                     'password' => 'c4tny2003'
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
