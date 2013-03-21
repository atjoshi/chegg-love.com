<?php
/**
 * Description of UserManager
 *
 * @author atjoshi
 * 
 */
namespace Lovecom\Business;

class UserManager  extends Lovecom\Business\BaseManager 
{
    public function createUser( $user )
    {
        return true;
    }
    
    public function loginUser( $loginName, $password )
    {
        
        return array( "user_id" => "1", 
                      "first_name" => "A", 
                      "last_name" => "J" );
    }
}