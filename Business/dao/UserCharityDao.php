<?php
/**
 * Description of UserCharityDao
 *
 * @author atjoshi
 * 
 */
namespace Lovecom\Business\dao;

class UserCharityDao extends BaseDao
{ 
    public function insert( $entity )
    {
        $q  = $this->pdo->prepare( "INSERT INTO love.user_charity
                                        SET
                                            user_charity_id = :userCharityId,
                                            user_id = :userId,
                                            charity_id = :charityId,
                                            is_active = :isActive,
                                            modified_date = NOW(),
                                            created_date = NOW()
                                " );
    }
    
    public function getByUserId( $userId )
    {
        $userCharities = array();
        $q = $this->pdo->prepare( "SELECT * FROM love.user_charity
                                        WHERE
                                            user_id = :userId
                                        AND
                                            is_active = 1
                                        ORDER
                                             BY created_date
                                " );
        $q->bindValue( ':userId', $userId );
        $q->execute();
        while( $row = $q->fetch( PDO::FETCH_ASSOC ) );
        {
            array_push( $userCharities, $row );
        }
        return $userCharities;
    }
    
    public function getByCharityId( $charityId )
    {
        $userCharities = array();
        $q = $this->pdo->prepare( "SELECT * FROM love.user_charity
                                        WHERE
                                            charity_id = :charityId
                                        AND
                                            is_active = 1
                                        ORDER
                                             BY created_date
                                " );
        $q->bindValue( ':userId', $charityId );
        $q->execute();
        while( $row = $q->fetch( PDO::FETCH_ASSOC ) );
        {
            array_push( $userCharities, $row );
        }
        return $userCharities;
    }
}