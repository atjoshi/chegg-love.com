<?php

/**
 * Description of CharityManager
 *
 * @author atjoshi
 * 
 */
namespace Lovecom\Business;

class CharityManager extends BaseManager 
{
    public function getAvailableCharities( $promoterUserId )
    {
        $pdo = Database::getInstance( 'master_read' );
        $promoterCharitiesDao = new Dao\PromoterCharitiesDao( $pdo );
        $charities = $promoterCharitiesDao->getByPromoterUserId( $promoterUserId );
        
        return $charities;
    }

    public function getAvailableCharities()
    {
        $pdo = Database::getInstance( 'master_read' );
        $charitiesDao = new Dao\CharitiesDao( $pdo );
        $charities = $charitiesDao->getCharities();
        
        return $charities;
        
    }
}
