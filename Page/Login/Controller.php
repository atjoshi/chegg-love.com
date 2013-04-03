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

namespace Lovecom\Page\Login;

class Controller extends \Lovecom\Mvc\PageController
{
    protected function doController()
    {
        if($this->getRequest()->getGet('lovebutton') == 1){
            $this->setViewClass('\Lovecom\Page\Login\PopupView');
        }
    }
}