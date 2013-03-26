<?php
/**
 * Description of UserLovedItemsDao
 *
 * @author atjoshi
 * 
 */
namespace Lovecom\Business\Dao;

class UserLovedItemsDao  extends BaseDao
{   
    public function create( $userId, $lovedUserId )
    {
        $userLovedItemId = uniqid();
        
        $q = $this->pdo->prepare( "INSERT INTO love.user_loved_items
                                        SET
                                            user_loved_item_id = :userLovedItemId,
                                            user_id = :userId,
                                            loved_item_user_id = :lovedItemUserId,
                                            is_active = 1,
                                            created_date = NOW(),
                                            modified_date = NOW()
                                " );
        $q->bindValue( ':userLovedItemId', $userLovedItemId );
        $q->bindValue( ':userId', $userId );
        $q->bindValue( ':lovedItemUserId', $lovedUserId );
        $q->execute();
        
        return $userLovedItemId;
    }
}