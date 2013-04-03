<?php

/**
 * Description of Controller
 *
 * @author      ben <ben@chegg.com>
 * @copyright   2013 Chegg INC
 * @link        http://mkp.chegg.com
 * @license     http://mkp.chegg.com/license
 * @version     1.0.0
 * @package     Msportal
 *
 */

namespace Lovecom\Api\Lovesubmit;

class Controller extends \Lovecom\Mvc\ApiController
{
    protected function doController()
    {
        $this->post('/lovesubmit', '\Lovecom\Api\Lovesubmit\Model', 'submitLove', array('user.normal')); 
    }
}