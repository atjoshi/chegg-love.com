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
        $usersDao =  new UsersDao( $pdo );
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
    
    public function saveUserLovedItem( $userId, $lovedUserId )
    {
        $pdo = Database::getInstance( 'love_com' );
        $userLovedItemsDao = new UserLovedItemsDao( $pdo );
        $userLovedItemsDao->create( $userId, $lovedUserId );
    }
    
    public function saveUserCharity( $userId, $loveUserId, $charityId )
    {
        $pdo = Database::getInstance( 'love_com' );
        $userCharityDao = new UserCharityDao( $pdo );
        $items = array(
                        "user_id" => $userId,
                        "charity_id" => $charityId,
                        "user_loved_item_id" => $lovedUserId 
                    );
        $userCharityDao->create( $items );
    }
}