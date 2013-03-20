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

    public function __construct($session = array(), \Lovecom\Business\User $user = null)
    {
        $this->session = $session;
        $this->user = $user;
    }

    /**
     * get the current user
     * 
     * @return \Lovecom\Business\User
     */
    public function getLoginUser()
    {
        return $this->user;
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
