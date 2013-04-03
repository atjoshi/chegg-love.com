<?php

/**
 * Request object for Simple Site
 * 
 * @author henry
 * @version 2012
 */

namespace Lovecom\System;

final class Request
{
    
    const METHOD_HEAD = 'HEAD';
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';
    const METHOD_PUT = 'PUT';
    const METHOD_DELETE = 'DELETE';

    /**
     *
     * @var array
     */
    private $data = array();

    /**
     *
     * @var $_GET
     */
    private $get;

    /**
     *
     * @var $_POST
     */
    private $post;

    /**
     *
     * @var $_REQUEST
     */
    private $request;

    /**
     *
     * @var $_SERVER
     */
    private $server;

    /**
     *
     * @var $_COOKIE
     */
    private $cookie;

    /**
     *
     * @var $_FILE
     */
    private $files;

    /**
     *
     * @var arary
     */
    private $arguments;

    /**
     *
     * @var namespace\Router 
     */
    private $router = null;

    /**
     *
     * @var namespace\Session 
     */
    private $session = null;

    public function __construct(Array $get = array(), Array $post = array(),
            Array $request = array(), Array $server = array(),
            Array $cookie = array(), Array $files = array(),
            namespace\Router $router = NULL, namespace\Session $session = NULL)
    {
        $this->get = $get;
        $this->post = $post;
        $this->request = $request;
        $this->server = $server;
        $this->cookie = $cookie;
        $this->files = $files;
        $this->router = $router;
        $this->session = $session;
    }

    /**
     * 
     * @param string $key
     * @return string
     */
    public function get($key)
    {
        return isset($this->data[$key]) ? $this->data[$key] : null;
    }

    /**
     * 
     * @param string $key
     * @param mix $value
     */
    public function set($key, $value = null)
    {
        if (is_array($key)) {
            foreach ($key as $k => $v) {
                $this->data[$k] = $v;
            }
        }
        else {
            $this->data[$key] = $value;
        }
    }

    /**
     * 
     * @param string $type
     * @param string $key
     * @param int $sanitize
     * @return string
     */
    public function getParam($type, $key = null, $sanitize = FILTER_UNSAFE_RAW)
    {
        $type = strtolower($type);
        if ($type != 'data') {
            $type = $this->$type;
            if ($key === null) {
                return $type;
            }
            if (isset($type[$key])) {
                if (is_array($type[$key])) {
                    return filter_var_array($type[$key], $sanitize);
                }
                else {
                    return trim(filter_var($type[$key], $sanitize));
                }
            }
        }
        return null;
    }

    // below are the compatibility components
    public function getGet($key = null, $sanitize = FILTER_UNSAFE_RAW)
    {
        return $this->getParam('get', $key, $sanitize);
    }

    public function getArguments($key = null, $sanitize = FILTER_UNSAFE_RAW)
    {
        $this->arguments = $this->router->getParts();
        return $this->getParam('arguments', $key, $sanitize);
    }

    public function getPost($key = null, $sanitize = FILTER_UNSAFE_RAW)
    {
        return $this->getParam('post', $key, $sanitize);
    }

    public function getRequest($key = null, $sanitize = FILTER_UNSAFE_RAW)
    {
        return $this->getParam('request', $key, $sanitize);
    }

    public function getServer($key = null, $sanitize = FILTER_UNSAFE_RAW)
    {
        return $this->getParam('server', $key, $sanitize);
    }

    public function getCookie($key = null, $sanitize = FILTER_UNSAFE_RAW)
    {
        return $this->getParam('cookie', $key, $sanitize);
    }

    public function getFiles($key = null, $sanitize = FILTER_UNSAFE_RAW)
    {
        return $this->getParam('files', $key, $sanitize);
    }

    /**
     * @return \Lovecom\System\Session
     */
    public function getSession()
    {
        return $this->getParam('session');
    }

    /**
     * 
     * @return namespace\Router
     */
    public function getRouter()
    {
        return $this->getParam('router');
    }

}
