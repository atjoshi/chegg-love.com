<?php

/**
 * Description of ApiModel
 *
 * @author      ben <ben@chegg.com>
 * @copyright   2013 Chegg INC
 * @link        http://mkp.chegg.com
 * @license     http://mkp.chegg.com/license
 * @version     1.0.0
 * @package     Lovecom
 *
 */

namespace Lovecom\Mvc;

class ApiModel extends BaseModel
{

    protected function doInit()
    {
        //There are northing to do with init
    }

    /**
     * Takes an array and puts it into the response.
     */
    protected function setAsResponse($arr)
    {
        foreach($arr as $k => $v) {
            $this->getResponse()->set($k, $v);
        }
    }
}
