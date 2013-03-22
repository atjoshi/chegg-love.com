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

namespace Lovecom\Page\Login;

class Model extends \Lovecom\Mvc\PageModel
{
    protected $usersManager; 
    
    public function doPageModel()
    {
        $username = $this->getRequest()->getPost('username'); 
        $password = $this->getRequest()->getPost('password'); 
        if(!empty($username) && !empty($password))
        {
            $userObj = $this->getUsersManager()->loginUser($username, $password); 
            if(!empty($userObj))
            {
                $this->getRequest()->getSession()->setSessionData('userId', $userObj['user_id']); 
                $destination = $this->getRequest()->getGet('destination'); 
                if(empty($destination))
                {
                    $destination = urldecode($destination); 
                }
                else
                {
                    $destination = '/'; 
                }
                $this->getResponse()->setRedirect($destination); 
                return;
            }
        }
        $params = $this->getRequest()->getGet(); 
        $this->getResponse()->set('loginParams', $params);
    }
    protected function getUsersManager()
    {
        if(!$this->usersManager)
        {
            $this->usersManager = new \Lovecom\Business\UsersManager(); 
        }
        return $this->usersManager; 
    }
}