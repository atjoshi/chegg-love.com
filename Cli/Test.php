<?php
namespace Lovecom\Cli;

class Test extends \Lovecom\System\Cli 
{

    public function execute($argv) 
    {
	
	$users = new \Lovecom\Business\UsersManager();
		
	/*$userEntity = array( "login_email" => "atjoshi@gmail.com" ,
                     "password" => "test",
                        "first_name" => "Ashit",
                        "last_name" => "Joshi",
                        "user_category" => "1"
                );

        $newUser = $users->createUser( $userEntity );*/
	$result = $users->loginUser( "atjoshi@gmail.com", "test" );
        var_dump( $result );exit;
    }

//put your code here
}
