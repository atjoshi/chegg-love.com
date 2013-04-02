<?php
/**
 * Description of BaseDao
 *
 * @author atjoshi
 */
namespace Lovecom\Business\Dao;

class BaseDao 
{
    protected $pdo = null;
    
    public function __construct( $pdo )
    {
        $this->pdo = $pdo;
    }
}
