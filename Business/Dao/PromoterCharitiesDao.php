<?php
/**
 * Description of CelebrityCharitiesDao
 *
 * @author atjoshi
 * 
 */
namespace Lovecom\Business\Dao;

class PromoterCharitiesDao extends BaseDao
{
    public function create( $entities )            
    {
        $entities[ 'promoter_charity_id' ] = uniqid();
        
        $q = $this->pdo->prepare( "INSERT INTO love.promoter_charities
                                    SET
                                        promoter_charity_id = :promoterCharityId,
                                        promoter_user_id = :promoterUserId,
                                        charity_id = :charityId,
                                        is_active = 1,
                                        created_date = NOW(),
                                        modified_date = NOW()
                                " );
        $q->bindValue( ':promoterCharityId', $entities[ 'promoter_charity_id' ] );
        $q->bindValue( ':promoterUserId', $entities[ 'promoter_user_id' ] );
        $q->bindValue( ':charityId', $entities[ 'charity_id' ] );
        $q->execute();
        
        return true;
    }
    
    public function getByPromoterUserId( $promoterUserId )
    {
        $q = $this->pdo->prepare( "SELECT * FROM love.promoter_charities pc
                                       INNER JOIN love.charities c ON c.charity_id = pc.charity_id
                                    WHERE
                                        promoter_user_id = :promoterUserId
                                     AND
                                        is_active = 1
                                " );
        $q->bindValue( '', $promoterUserId );
        $q->execute();
        
        $charities = array();
        
        while( $row = $q->fetch( PDO::FETCH_ASSOC ) )
        {
            array_push( $charities, $row );
        }
        return $charities;
    }
}
