<?php

/**
 * Description of PageController
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

class PageController extends \Lovecom\Mvc\BaseController
{
    
    /**
     * 
     * @return array(string)
     */
    public function getPermissions()
    {
        return array(); 
    }
    
    /**
     * Don't override this class. 
     * 
     * @return \Lovecom\Mvc\PageView
     */
    public function dispatch()
    {
        $permissions = $this->getPermissions(); 
        if (!empty($permissions)) {
            $user = $this->getRequest()->getSession()->getLoginUser(); 
            if($user == null || !$user->isPermitted($permissions)){
                return new \Lovecom\Page\Login\View($this->getResponse()); 
            }
        }
        
        return parent::dispatch();
    }
    
    protected function doController()
    {
        
    }

    protected function doModel()
    {
        /**
         * @var $model \Lovecom\Mvc\PageModel
         */
        $model = $this->getModel(); 
        $model->doPageModel(); 
    }

    protected function controllerNamespace()
    {
        return 'Page'; 
    }
}