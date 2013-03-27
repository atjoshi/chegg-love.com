<?php

/**
 * Description of Model
 *
 * @author      ben <ben@chegg.com>
 * @copyright   2013 Chegg INC
 * @link        http://mkp.chegg.com
 * @license     http://mkp.chegg.com/license
 * @version     1.0.0
 * @package     Msportal
 *
 */

namespace Lovecom\Api\Login;

class Model extends \Lovecom\Mvc\ApiModel
{   
    public function popupLoginModal()
    {
        $this->getResponse()->addHeader("HTTP/1.1 401 Unauthorized");
    }
}