<?php
/**
 * Description of BaseDao
 *
 * @author atjoshi
 */
namespace Lovecom\Business;

class BaseDao 
{
    protected $pdo = null;
    
    public function __construct( $pdo )
    {
        $this->pdo = $pdo;
    }
}
