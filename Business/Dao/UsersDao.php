<?php
/**
 * 
 * Description of UsersDao
 *
 * @author atjoshi
 * 
 */
namespace Lovecom\Business\Dao;

class UsersDao extends BaseDao
{
    public function create( $user )
    {
        $userId = uniqid();
        $q = $this->pdo->prepare( "INSERT INTO love_com.users
					SET
                                        	user_id = :userId,
                                        	login_email = :loginEmail,
                                        	password = :password,
                                        	first_name = :firstName,
                                        	last_name = :lastName,
                                        	user_category = :userCategory,
                                        	created_date = NOW(),
                                        	modified_date = NOW()
                                " );
        $q->bindValue( ':userId', $userId );
        $q->bindValue( ':loginEmail', $user[ 'login_email' ] );
        $q->bindValue( ':password', $user[ 'password' ] );
        $q->bindValue( ':firstName', $user[ 'first_name' ] );
        $q->bindValue( ':lastName', $user[ 'last_name' ] );
        $q->bindValue( ':userCategory', $user[ 'user_category' ] );
        $q->execute();
       	var_dump( $q->errorInfo(), $user );exit; 
        return $userId;
    }
    
    public function getByLoginEmail( $loginEmail )
    {
        $q = $this->pdo->prepare( "SELECT * FROM love_com.users WHERE login_email = :loginEmail" );
        $q->bindValue( ':loginEmail', $loginEmail );
        $q->execute();
        
        return $q->fetch( PDO::FETCH_ASSOC  ); 
    }
}
