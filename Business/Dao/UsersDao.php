<?php
/**
 * Description of UsersDao
 *
 * @author atjoshi
 */
namespace Lovecom\Business;

class UsersDao extends Dao\BaseDao
{
    public function create( $entity )
    {
        $entity[ 'user_id' ] = uniqid();
        $q = $this->pdo->prepare( "INSERT INTO love.users
                                    SET
                                        user_id = :userId,
                                        login_email = :loginEmail,
                                        password = :password,
                                        first_name = :firstName,
                                        last_name = :lastName,
                                        user_category = :userCategory,
                                        is_active =1,
                                        created_date = NOW()
                                        modified_date = NOW()
                                    
                            " );
        $q->bindValue( ':userId', $entity[ 'user_id' ] );
        $q->bindValue( ':loginEmail', $entity[ 'login_email' ] );
        $q->bindValue( ':password', $entity[ 'password' ] );
        $q->bindValue( ':firstName', $entity[ 'first_name' ] );
        $q->bindValue( ':lastName', $entity[ 'last_name' ] );
        $q->bindValue( ':userCategory', $entity[ 'user_category' ] );
        $q->execute();
        
        return $entity;
    }
    
    public function getByLoginEmail( $loginEmail )
    {
        $q = $this->pdo->prepare( "SELECT * FROM love.users WHERE login_email = :loginEmail" );
        $q-bindValue( '', $loginEmail );
        $q->execute();
        return $q->fetch( PDO::FETCH_ASSOC );
    }
}