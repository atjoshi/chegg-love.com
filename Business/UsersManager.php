<?php
/**
 * Description of UserManager
 *
 * @author atjoshi
 * 
 */
namespace Lovecom\Business;

class UserManager  extends BaseManager 
{
    public function createUser( $user )
    {
        
    }
    
    public function loginUser( $loginName, $password )
    {
        
        return array( "user_id" => "1", 
                      "first_name" => "A", 
                      "last_name" => "J" );
    }
}