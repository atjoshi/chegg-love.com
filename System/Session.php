<?php

// we have to require this class because it does executes by itself

/**
 * Authenticate a user and maintain session information
 *
 * @Author Tom Lang 3/2010
 * @Author Kean 4/2012
 */

namespace Lovecom\System;

class Session
{

    private static $sessionId;
    private static $expiration;
    private $user;
    private $session;
    private $sessionChanged = false;
    private $usersManagers = array(); 

    public static function startSession($startSessionNow = true,
            $sessionName = '', $iniSet = array())
    {

        if ($startSessionNow) {
            if (!session_id()) {
                foreach ($iniSet as $key => $value) {
                    ini_set($key, $value);
                }

                if ($sessionName) {
                    session_name($sessionName);
                }
                session_start();
            }
        }

        self::$sessionId = session_id();

        self::$expiration = time() + (60 * 60 * 24 * 365 * 5);
    }

    public function __construct($session = array())
    {
        $this->session = $session;
        $this->user = null;
    }

    /**
     * get the current user
     * 
     * @return \Lovecom\Business\User
     */
    public function getLoginUser()
    {
        if($this->user == null && $this->getSessionData('userId') > 0){
            $this->user = $this->getUsersManager($this->getSessionData('userId')); 
        }
        return $this->user;
    }
    
    protected function getUsersManager($userId)
    {
        if(!isset($this->usersManagers[$userId]))
        {
            $manager = new \Lovecom\Business\UsersManager(); 
            $manager->getUser($userId); 
            $this->usersManagers[$userId] = $manager; 
        }
        return $this->usersManagers[$userId]; 
            
    }
    
    /**
     * for test 
     * 
     * @param type $userId
     * @param type $obj
     */
    public function setUserManager($userId, $obj)
    {
        $this->usersManagers[$userId] = $obj; 
    }

    public function isLoggedIn()
    {
        return !is_null($this->user);
    }

    public function getSession()
    {
        return $this->session;
    }

    public function setSessionData($key, $value)
    {
        $this->session[$key] = $value;
        $this->sessionChanged = true;
    }

    public function getSessionData($key)
    {
        return isset($this->session[$key]) ? $this->session[$key] : null;
    }

    public function isSessionChanged()
    {
        return $this->sessionChanged;
    }

}
