<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserCharityDao
 *
 * @author atjoshi
 */
namespace Lovecom\Business;

class UserCharityDao extends Dao\BaseDao
{
    public function create( $entity )
    {
        $entity[ 'user_charity_id' ] = uniqid();
        
        $q = $this->pdo->prepare( "INSERT INTO love.user_charity
                                      SET
                                        user_charity_id = :userCharityId,
                                        user_id = :userId,
                                        promoter_user_id = :promoterUserId,
                                        user_loved_promoter_id = :userLovedPromoterId,
                                        is_active = 1,
                                        created_date = NOW(),
                                        modified_date = NOW()
                                  " );
        
        $q->bindValue( ':userCharityId', $entity[ 'user_charity_id' ] );
        $q->bindValue( ':userId', $entity[ 'user_id' ] );
        $q->bindValue( ':promoterUserId', $entity[ 'promoter_user_id' ] );
        $q->bindValue( ':userLovedPromoterId', $entity[ 'user_loved_promoter_id' ] );
        $q->execute();
    }
    
    public function getByUserIdCharityId( $userId, $promoterUserId, $charityId )
    {
        $q = $this->pdo->prepare( "SELECT * FROM love.user_charity
                                    WHERE
                                        user_id = :userId
                                    AND
                                        charity_id = :charityId
                                    AND
                                        promoter_user_id = :promoterUserId
                                    AND
                                        is_active = 1
                                " );
        $q->bindValue( ':userId', $userId );
        $q->bindValue( ':promoterUserId', $promoterUserId );
        $q->bindValue( ':charityId', $charityId );
        $q->execute();
        
        return $q->fetch( PDO::FETCH_ASSOC );
    }
}