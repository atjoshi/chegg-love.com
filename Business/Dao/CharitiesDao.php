<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CharitiesDao
 *
 * @author atjoshi
 */
namespace Lovecom\Business;

class CharitiesDao extends Dao\BaseDao
{
    public function create( $entity )
    {
        $entity[ 'charityId' ] = uniqid();
        
        $q = $this->pdo->prepare( 
                                    "INSERT INTO love_com.charities
                                            SET
                                                charity_id = :charityId,
                                                charity_name = :charityName,
                                                charity_metadata = :charityMetadata,
                                                created_date = NOW(),
                                                modified_date = NOW()
                                    " 
                                );
        $q->bindValue ( ':charityId', $entity[ 'charityId' ] );
        $q->bindValue ( ':charityName', $entity[ 'charity_name' ] );
        $q->bindValue ( ':charityMetadata', $entity[ 'charity_metadata' ] );
        $q->execute();
    }
    
    public function getByCharityId( $charityId )
    {
        $q = $this->pdo->prepare( "SELECT * FROM love_com.charities
                                    WHERE
                                        charity_id = :charityId
                                " );
        $q->bindValue( ':charityId', $charityId );
        $q->execute();
        return $q->fetch( PDO::FETCH_ASSOC );
    }

    public function getCharities()
    {
        $q = $this->pdo->prepare( "SELECT * FROM love_com.charities" );
        $q->execute();
        
        return $q->fetchAll();
    }

}
