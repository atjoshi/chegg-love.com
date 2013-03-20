<?php

/**
 * Base class for URL to MVC routing
 *
 * @author Kean
 */

namespace Lovecom\System;

class Router
{

    private $request;
    private $response;
    private $session;
    private $class = '';
    private $parts = array();

    public function route()
    {
        if (extension_loaded('newrelic')) {
            newrelic_name_transaction($this->class);
        }

        $parts = $this->getParts();

        $this->class = \Lovecom\Mvc\MvcHelper::getBaseClassName(
                        $this->getControllerNamespace(), 'Controller', $parts);

        return new $this->class();
    }

    final public function startMvc()
    {
        $controller = $this->route();
        $view = $controller->execute($this->getRequest(), $this->getResponse());

        if (is_string($view)) {
            $view = new $view($this->getResponse());
        }
        
        if ($this->getSession()->isSessionChanged()) {
            $_SESSION = $this->getSession()->getSession();
        }
        
        $view->render();
    }

    /**
     * get all the part to create router
     */
    public function getParts()
    {
        if (empty($this->parts)) {
            $this->parts = $this->getUrlArguments();
            if (empty($this->parts)) {
                $this->parts = array('index');
            }
            else if (reset($this->parts) == 'api') {
                array_shift($this->parts);
            }
        }
        return $this->parts;
    }

    public function getControllerNamespace()
    {
        $argument = $this->getUrlArguments();
        if (reset($argument) == 'api') {
            return 'Api';
        }
        else {
            return 'Page';
        }
    }

    /**
     * get the orignal arguments from url 
     * 
     * @return string
     */
    protected function getUrlArguments()
    {
        $url = $this->getRequest()->getServer('REDIRECT_SCRIPT_URL');
        if (empty($url)) {
            $url = $this->getRequest()->getServer('SCRIPT_URL');
        }

        // mother of all strtolower, don't strtolower again or I get ya
        $url = strtolower($url);
        // strip trailing slash, if any
        $url = trim($url, '/');

        // create mvc like class name
        $arguments = explode('/', $url);
        $arguments = array_filter($arguments);
        return $arguments;
    }

    /**
     * 
     * @return namespace\Request
     */
    protected function getRequest()
    {
        if (!$this->request) {
            if(isset($_SERVER['CONTENT_TYPE']) && stripos($_SERVER['CONTENT_TYPE'],'application/json') !== false){
                $data = file_get_contents("php://input");
                $post = json_decode($data, true);
            }
            else{
                $post = $_POST; 
            }
            
            $this->request = new namespace\Request(
                            $_GET, $post, $_REQUEST,
                            $_SERVER, $_COOKIE, $_FILES, $this,
                            $this->getSession());
        }
        return $this->request;
    }

    /**
     * set request use in phpunit
     * 
     * @param \Lovecom\System\Request $request
     */
    public function setRequest(namespace\Request $request)
    {
        $this->request = $request;
    }

    /**
     *
     * @return namespace\Response 
     */
    public function getResponse()
    {
        if (!$this->response) {
            $this->response = new namespace\Response();
        }
        return $this->response;
    }

    /**
     * 
     * set response use in phpunit
     * 
     * @param \Lovecom\System\Response $response
     */
    public function setResponse(namespace\Response $response)
    {
        $this->response = $response;
    }

    /**
     * 
     * @return namespace\Session
     */
    public function getSession()
    {
        if (!$this->session) {
            namespace\Session::startSession();
            $user = null;
            if (!empty($_SERVER['REMOTE_USER']))
            {
                $user = new \Lovecom\Business\User($_SERVER['REMOTE_USER']);
            }
            $this->session = new namespace\Session($_SESSION, $user);
        }
        return $this->session;
    }

    public function setSession(namespace\Session $session)
    {
        $this->session = $session;
    }

}
