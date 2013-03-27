<?php
/**
 * Description of UserLovedItemsDao
 *
 * @author atjoshi
 * 
 */
namespace Lovecom\Business;

class UserLovedPromotersDao  extends Dao\BaseDao
{   
    public function create( $userId, $lovedUserId )
    {
        $userLovedPromoterId = uniqid();
        
        $q = $this->pdo->prepare( "INSERT INTO love.user_loved_promoters
                                        SET
                                            user_loved_promoter_id = :userLovedPromoterId,
                                            user_id = :userId,
                                            loved_promoter_user_id = :lovedPromoterUserId,
                                            is_active = 1,
                                            created_date = NOW(),
                                            modified_date = NOW()
                                " );
        $q->bindValue( ':userLovedPromoterId', $userLovedPromoterId );
        $q->bindValue( ':userId', $userId );
        $q->bindValue( ':lovedPromoterUserId', $lovedUserId );
        $q->execute();
        
        return $userLovedPromoterId;
    }
}