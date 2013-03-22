<?php

/**
 * Description of ApiView
 *
 * @author      ben <ben@chegg.com>
 * @copyright   2013 Chegg INC
 * @link        http://mkp.chegg.com
 * @license     http://mkp.chegg.com/license
 * @version     1.0.0
 * @package     Msportal
 *
 */

namespace Lovecom\Mvc;

class ApiView extends BaseView
{
    private $results; 

    protected function doInit()
    {
        $this->results = $this->response->getUnsaleDataRaw(); 
    }

    public function render()
    {
        header('Content-Type: application/json; charset=UTF-8');
        echo json_encode($this->results); 
    }

}