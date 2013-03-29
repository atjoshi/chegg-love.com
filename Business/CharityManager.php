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
        $pdo = Database::getInstance( 'love_com' );
        $promoterCharitiesDao = new Dao\PromoterCharitiesDao( $pdo );
        $charities = $promoterCharitiesDao->getByPromoterUserId( $promoterUserId );
        
        return $charities;
    }

    public function getAvailableCharities()
    {
        $pdo = Database::getInstance( 'love_com' );
        $charitiesDao = new Dao\CharitiesDao( $pdo );
        $charities = $charitiesDao->getCharities();
        
        return $charities;
        
    }
   
}
