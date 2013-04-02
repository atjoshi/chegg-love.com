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
        $pdo = Database::getInstance( 'master_read' );
        $usersDao =  new \Lovecom\Business\Dao\UsersDao( $pdo );
	$user[ 'password' ] = md5( $user[ 'password' ] );
        $userId = $usersDao->create( $user );
        
        return $userId;
    }
    
    public function loginUser( $loginName, $password )
    {
        //return array('user_id'=>1);
        $pdo = Database::getInstance( 'master_read' );
        $usersDao =  new \Lovecom\Business\Dao\UsersDao( $pdo );
        $user = $usersDao->getByLoginEmail( $loginName );
       	var_dump( $user );exit; 
        if( !empty( $user ) )
        {
            if( $user[ 'password' ] == md5( $password ) )
            {
                return $user;
            }
        }
        
        throw new Exception( "Invalid Login/Password", 2 );
    }
    
    public function saveUserLovedPromoter( $userId, $promoterUserId )
    {
        $pdo = Database::getInstance( 'master_read' );
        $userLovedPromoterDao = new Dao\UserLovedPromoterDao( $pdo );
        $userLovedPromoterDao->create( $userId, $promoterUserId );
    }
    
    public function saveUserCharity( $userId, $loveUserId, $charityId )
    {
        $pdo = Database::getInstance( 'master_read' );
        $userCharityDao = new Dao\UserCharityDao( $pdo );
        $items = array(
                        "user_id" => $userId,
                        "charity_id" => $charityId,
                        "user_loved_item_id" => $lovedUserId 
                    );
        $userCharityDao->create( $items );
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
