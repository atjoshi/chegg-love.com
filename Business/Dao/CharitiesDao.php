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
    public function getByCharityId( $charityId )
    {
        $q = $this->pdo->prepare( "SELECT * FROM love.charities
                                    WHERE
                                        charity_id = :charityId
                                " );
        $q->bindValue( ':charityId', $charityId );
        $q->execute();
        return $q->fetch( PDO::FETCH_ASSOC );
    }
}
