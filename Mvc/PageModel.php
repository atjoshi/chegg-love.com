<?php

/**
 * Description of PageModel
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

class PageModel extends BaseModel
{
    protected function doInit()
    {
        $user = $this->getRequest()->getSession()->getLoginUser(); 
        if($user != null){
            $this->getResponse()->set('user.username', $user->getUserName()); 
            $this->getResponse()->set('user.login', true); 
        }
        else{
            $this->getResponse()->set('user.login', false);
        }
    }
    
    public function doPageModel()
    {
        
    }
}