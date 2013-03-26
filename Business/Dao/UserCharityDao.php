<?php
/**
 * Description of UserCharityDao
 *
 * @author atjoshi
 * 
 */
namespace Lovecom\Business\Dao;

class UserCharityDao extends BaseDao
{ 
    public function create( $entity )
    {
        $userCharityId = uniqid();
        
        $q  = $this->pdo->prepare( "INSERT INTO love.user_charity
                                        SET
                                            user_charity_id = :userCharityId,
                                            user_id = :userId,
                                            charity_id = :charityId,
                                            user_loved_item_id = :userLovedItemId,
                                            is_active = 1,
                                            modified_date = NOW(),
                                            created_date = NOW()
                                " );
        $q->bindValue( ':userCharityId', $userCharityId );
        $q->bindValue( ':userId', $entity[ 'user_id' ] );
        $q->bindValue( ':charityId', $entity[ 'charity_id' ] );
        $q->bindValue( ':userLovedItemId', $entity[ 'user_loved_item_id' ] );
        $q->execute();
        
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