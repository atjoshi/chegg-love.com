<?php
/**
 * 
 * Description of UsersDao
 *
 * @author atjoshi
 * 
 */
namespace Lovecom\Business\dao;

class UsersDao extends BaseDao
{
    public function create( $user )
    {
        $q = $this->pdo->prepare( "INSERT INTO love.users
                                        user_id = :userId,
                                        login_email = :loginEmail,
                                        password = :password,
                                        first_name = :firstName,
                                        last_name = :lastName
                                        user_category = :userCategory
                                        created_date = NOW(),
                                        modified_date = NOW()
                                " );
        $q->bindValue( ':userId', uniqid() );
        $q->bindValue( ':loginEmail', $user[ 'login_email' ] );
        $q->bindValue( ':password', $user[ 'password' ] );
        $q->bindValue( ':firstName', $user[ 'first_name' ] );
        $q->bindValue( ':lastName', $user[ 'last_name' ] );
        $q->bindValue( ':userCategory', $user[ 'user_category' ] );
        $q->execute();
    }
    
    public function getByLoginEmail( $loginEmail )
    {
        $q = $this->pdo->prepare( "SELECT * FROM love.users WHERE login_email = :loginEmail" );
        $q->bindValue( ':loginEmail', $loginEmail );
        $q->execute();
        
        return $q->fetch( PDO::FETCH_ASSOC  ); 
    }
}