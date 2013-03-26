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
        $pdo = Database::getInstance( 'love_com' );
        $usersDao =  new UsersDao( $pdo );
        $userId = $usersDao->create( $user );
        
        return $userId;
    }
    
    public function loginUser( $loginName, $password )
    {
        $pdo = Database::getInstance( 'love_com' );
        $usersDao =  new Dao\UsersDao( $pdo );
        $user = $usersDao->getByLoginEmail( $loginName );
        
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
        $pdo = Database::getInstance( 'love_com' );
        $userLovedPromoterDao = new Dao\UserLovedPromoterDao( $pdo );
        $userLovedPromoterDao->create( $userId, $promoterUserId );
    }
    
    public function saveUserCharity( $userId, $loveUserId, $charityId )
    {
        $pdo = Database::getInstance( 'love_com' );
        $userCharityDao = new Dao\UserCharityDao( $pdo );
        $items = array(
                        "user_id" => $userId,
                        "charity_id" => $charityId,
                        "user_loved_item_id" => $lovedUserId 
                    );
        $userCharityDao->create( $items );
    }
}