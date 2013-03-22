<?php
/**
 * Description of UserManager
 *
 * @author atjoshi
 * 
 */
namespace Lovecom\Business;

class UsersManager  extends BaseManager 
{
    protected $user; 
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
    public function getUserName()
    {
        return 'A J';
    }
    /**
     * pull user data
     * 
     * @param type $userId
     */
    public function getUser($userId)
    {
        $this->user = $userId;
    }
    /**
     * check to see if user has page permission
     * 
     * @param type $permissions
     * @return type
     */
    public function isPermitted($permissions)
    {
        return ($this->user > 0 && !empty($permissions)); 
    }
}