<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseDao
 *
 * @author atjoshi
 */
class BaseDao 
{
    protected $pdo = null;
    
    public function __construct( $pdo )
    {
        $this->pdo = $pdo;
    }
}
